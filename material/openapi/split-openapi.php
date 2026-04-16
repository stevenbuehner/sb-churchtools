#!/usr/bin/env php
<?php

declare(strict_types=1);

const METHODS = ['get', 'post', 'put', 'patch', 'delete', 'options', 'head', 'trace'];

function usage(): void
{
    fwrite(STDERR, "Usage: php material/openapi/split-openapi.php [--input=...] [--config=...] [--out=...] [--strict]\n");
}

function parseArgs(array $argv): array
{
    $opts = [
        'input' => __DIR__ . '/openapi.json',
        'config' => __DIR__ . '/split-packages.json',
        'out' => dirname(__DIR__, 2) . '/build-splits',
        'strict' => false,
    ];

    foreach ($argv as $arg) {
        if ($arg === '--strict') {
            $opts['strict'] = true;
            continue;
        }
        if (!str_starts_with($arg, '--')) {
            continue;
        }
        $parts = explode('=', $arg, 2);
        if (count($parts) !== 2) {
            usage();
            exit(2);
        }
        $key = ltrim($parts[0], '-');
        if (array_key_exists($key, $opts)) {
            $opts[$key] = $parts[1];
        }
    }

    return $opts;
}

function extractFirstJsonObject(string $content): string
{
    $len = strlen($content);
    $start = strpos($content, '{');
    if ($start === false) {
        throw new RuntimeException('Kein JSON-Objekt gefunden.');
    }

    $depth = 0;
    $inString = false;
    $escaped = false;

    for ($i = $start; $i < $len; $i++) {
        $ch = $content[$i];

        if ($inString) {
            if ($escaped) {
                $escaped = false;
                continue;
            }
            if ($ch === '\\') {
                $escaped = true;
                continue;
            }
            if ($ch === '"') {
                $inString = false;
            }
            continue;
        }

        if ($ch === '"') {
            $inString = true;
            continue;
        }
        if ($ch === '{') {
            $depth++;
            continue;
        }
        if ($ch === '}') {
            $depth--;
            if ($depth === 0) {
                return substr($content, $start, $i - $start + 1);
            }
        }
    }

    throw new RuntimeException('JSON-Objekt konnte nicht vollständig extrahiert werden.');
}

function jsonDecode(string $json, string $context): array
{
    $data = json_decode($json, true);
    if (!is_array($data)) {
        throw new RuntimeException($context . ': ' . json_last_error_msg());
    }
    return $data;
}

function pathPrefixScore(string $path, array $prefixes): int
{
    $score = 0;
    foreach ($prefixes as $prefix) {
        if ($prefix !== '' && str_starts_with($path, $prefix)) {
            $score = max($score, strlen($prefix));
        }
    }
    return $score;
}

function assignPackage(string $path, array $tags, array $packages, string $defaultPackage): array
{
    $bestPrefixPackage = null;
    $bestPrefixScore = 0;

    foreach ($packages as $package) {
        $prefixScore = pathPrefixScore($path, $package['pathPrefixes'] ?? []);
        if ($prefixScore > $bestPrefixScore) {
            $bestPrefixScore = $prefixScore;
            $bestPrefixPackage = $package['name'] ?? null;
        }
    }

    if (is_string($bestPrefixPackage) && $bestPrefixScore > 0) {
        return [$bestPrefixPackage, 'pathPrefix'];
    }

    foreach ($packages as $package) {
        $tagMatch = count(array_intersect($tags, $package['tags'] ?? [])) > 0;
        if ($tagMatch) {
            return [$package['name'] ?? $defaultPackage, 'tag'];
        }
    }

    return [$defaultPackage, 'default'];
}

function writeJson(string $path, array $data): void
{
    $dir = dirname($path);
    if (!is_dir($dir) && !mkdir($dir, 0777, true) && !is_dir($dir)) {
        throw new RuntimeException("Konnte Verzeichnis nicht erstellen: {$dir}");
    }
    $encoded = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    if ($encoded === false) {
        throw new RuntimeException("JSON Encoding fehlgeschlagen für {$path}");
    }
    file_put_contents($path, $encoded . PHP_EOL);
}

function collectRefs(mixed $node, array &$out): void
{
    if (is_array($node)) {
        if (isset($node['$ref']) && is_string($node['$ref'])) {
            $out[] = $node['$ref'];
        }
        foreach ($node as $child) {
            collectRefs($child, $out);
        }
    }
}

function parseComponentRef(string $ref): ?array
{
    if (!preg_match('#^#/components/([^/]+)/([^/]+)$#', $ref, $m)) {
        return null;
    }
    return [$m[1], $m[2]];
}

function collectSecuritySchemes(array $specSecurity, array $paths): array
{
    $names = [];
    foreach ($specSecurity as $secReq) {
        if (!is_array($secReq)) {
            continue;
        }
        foreach ($secReq as $scheme => $_scopes) {
            if (is_string($scheme) && $scheme !== '') {
                $names[$scheme] = true;
            }
        }
    }
    foreach ($paths as $pathItem) {
        if (!is_array($pathItem)) {
            continue;
        }
        foreach ($pathItem as $method => $operation) {
            if (!in_array(strtolower((string) $method), METHODS, true) || !is_array($operation)) {
                continue;
            }
            foreach (($operation['security'] ?? []) as $secReq) {
                if (!is_array($secReq)) {
                    continue;
                }
                foreach ($secReq as $scheme => $_scopes) {
                    if (is_string($scheme) && $scheme !== '') {
                        $names[$scheme] = true;
                    }
                }
            }
        }
    }
    return array_keys($names);
}

function buildPrunedComponents(array $fullComponents, array $paths, array $specSecurity): array
{
    $refs = [];
    collectRefs($paths, $refs);

    $queue = [];
    $seen = [];
    foreach ($refs as $ref) {
        $parsed = parseComponentRef($ref);
        if ($parsed === null) {
            continue;
        }
        [$section, $name] = $parsed;
        $key = $section . '/' . $name;
        if (!isset($seen[$key])) {
            $seen[$key] = true;
            $queue[] = [$section, $name];
        }
    }

    $result = [];
    while (!empty($queue)) {
        [$section, $name] = array_shift($queue);
        if (!isset($fullComponents[$section]) || !isset($fullComponents[$section][$name])) {
            continue;
        }
        $result[$section] = $result[$section] ?? [];
        if (isset($result[$section][$name])) {
            continue;
        }
        $result[$section][$name] = $fullComponents[$section][$name];

        $innerRefs = [];
        collectRefs($fullComponents[$section][$name], $innerRefs);
        foreach ($innerRefs as $innerRef) {
            $parsed = parseComponentRef($innerRef);
            if ($parsed === null) {
                continue;
            }
            [$innerSection, $innerName] = $parsed;
            $innerKey = $innerSection . '/' . $innerName;
            if (!isset($seen[$innerKey])) {
                $seen[$innerKey] = true;
                $queue[] = [$innerSection, $innerName];
            }
        }
    }

    $usedSchemes = collectSecuritySchemes($specSecurity, $paths);
    if (!empty($usedSchemes) && isset($fullComponents['securitySchemes']) && is_array($fullComponents['securitySchemes'])) {
        foreach ($usedSchemes as $scheme) {
            if (isset($fullComponents['securitySchemes'][$scheme])) {
                $result['securitySchemes'] = $result['securitySchemes'] ?? [];
                $result['securitySchemes'][$scheme] = $fullComponents['securitySchemes'][$scheme];
            }
        }
    }

    return $result;
}

$opts = parseArgs(array_slice($argv, 1));

$inputRaw = file_get_contents($opts['input']);
if ($inputRaw === false) {
    throw new RuntimeException("Konnte Input nicht lesen: {$opts['input']}");
}

$configRaw = file_get_contents($opts['config']);
if ($configRaw === false) {
    throw new RuntimeException("Konnte Config nicht lesen: {$opts['config']}");
}

$config = jsonDecode($configRaw, 'Config ungültig');
$defaultPackage = $config['defaultPackage'] ?? 'churchtools-core';
$packages = $config['packages'] ?? [];

$cleanJson = extractFirstJsonObject($inputRaw);
$spec = jsonDecode($cleanJson, 'OpenAPI ungültig');

if (!isset($spec['paths']) || !is_array($spec['paths'])) {
    throw new RuntimeException('OpenAPI Spec enthält keine paths.');
}

$packageSpecs = [];
$summary = [
    'generatedAt' => date(DATE_ATOM),
    'input' => realpath($opts['input']) ?: $opts['input'],
    'config' => realpath($opts['config']) ?: $opts['config'],
    'pathCount' => count($spec['paths']),
    'operationCount' => 0,
    'packages' => [],
    'unmappedPaths' => [],
];

foreach ($spec['paths'] as $path => $pathItem) {
    $opTags = [];
    foreach ($pathItem as $method => $operation) {
        if (!in_array(strtolower((string) $method), METHODS, true) || !is_array($operation)) {
            continue;
        }
        $summary['operationCount']++;
        foreach (($operation['tags'] ?? []) as $tag) {
            if (is_string($tag) && $tag !== '') {
                $opTags[$tag] = true;
            }
        }
    }

    $tags = array_keys($opTags);
    [$pkgName, $reason] = assignPackage($path, $tags, $packages, $defaultPackage);
    if (!isset($packageSpecs[$pkgName])) {
        $packageSpecs[$pkgName] = $spec;
        $packageSpecs[$pkgName]['paths'] = [];
    }
    $packageSpecs[$pkgName]['paths'][$path] = $pathItem;

    if ($reason === 'default') {
        $summary['unmappedPaths'][] = $path;
    }
}

foreach ($packageSpecs as $pkgName => $pkgSpec) {
    $pkgSpec['components'] = buildPrunedComponents($spec['components'] ?? [], $pkgSpec['paths'], $spec['security'] ?? []);
    $outputPath = rtrim($opts['out'], '/') . "/{$pkgName}/openapi.json";
    writeJson($outputPath, $pkgSpec);
    $summary['packages'][$pkgName] = [
        'pathCount' => count($pkgSpec['paths']),
    ];
}

ksort($summary['packages']);
sort($summary['unmappedPaths']);

$reportPath = rtrim($opts['out'], '/') . '/split-report.json';
$previousReport = null;
if (file_exists($reportPath)) {
    $previousRaw = file_get_contents($reportPath);
    if (is_string($previousRaw) && $previousRaw !== '') {
        $decoded = json_decode($previousRaw, true);
        if (is_array($decoded)) {
            $previousReport = $decoded;
        }
    }
}

$summary['changes'] = [
    'newUnmappedCount' => count($summary['unmappedPaths']),
    'hadPreviousReport' => $previousReport !== null,
];

if (is_array($previousReport)) {
    $prevUnmapped = $previousReport['unmappedPaths'] ?? [];
    $summary['changes']['unmappedAdded'] = array_values(array_diff($summary['unmappedPaths'], $prevUnmapped));
    $summary['changes']['unmappedRemoved'] = array_values(array_diff($prevUnmapped, $summary['unmappedPaths']));
}

writeJson($reportPath, $summary);

echo "Split abgeschlossen: {$summary['operationCount']} Operationen, " . count($summary['packages']) . " Pakete.\n";
echo "Report: {$reportPath}\n";
echo "Unmapped Paths: " . count($summary['unmappedPaths']) . "\n";

if ($opts['strict'] && count($summary['unmappedPaths']) > 0) {
    fwrite(STDERR, "Strict mode: Unmapped Paths gefunden.\n");
    exit(1);
}
