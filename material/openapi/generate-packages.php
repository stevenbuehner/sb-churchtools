#!/usr/bin/env php
<?php

declare(strict_types=1);

function parseArgs(array $argv): array
{
    $opts = [
        'input' => __DIR__ . '/openapi.json',
        'config' => __DIR__ . '/split-packages.json',
        'splits' => dirname(__DIR__, 2) . '/build-splits',
        'build' => dirname(__DIR__, 2) . '/build-packages',
        'build-tests' => dirname(__DIR__, 2) . '/build-tests',
        'build-docs' => dirname(__DIR__, 2) . '/build-docs',
        'templates' => __DIR__ . '/templates',
        'version' => '0.1.0',
        'package' => '',
        'strict' => false,
        'clean-build' => true,
        'keep-test-artifacts' => false,
        'run-tests' => true,
    ];

    foreach ($argv as $arg) {
        if ($arg === '--strict') {
            $opts['strict'] = true;
            continue;
        }
        if ($arg === '--no-clean-build') {
            $opts['clean-build'] = false;
            continue;
        }
        if ($arg === '--keep-test-artifacts') {
            $opts['keep-test-artifacts'] = true;
            continue;
        }
        if ($arg === '--no-run-tests') {
            $opts['run-tests'] = false;
            continue;
        }
        if (!str_starts_with($arg, '--')) {
            continue;
        }
        $parts = explode('=', $arg, 2);
        if (count($parts) !== 2) {
            continue;
        }
        $key = ltrim($parts[0], '-');
        if (array_key_exists($key, $opts)) {
            $opts[$key] = $parts[1];
        }
    }

    return $opts;
}

function run(string $command): void
{
    passthru($command, $code);
    if ($code !== 0) {
        throw new RuntimeException("Command failed ({$code}): {$command}");
    }
}

function writeJson(string $path, array $data): void
{
    $dir = dirname($path);
    if (!is_dir($dir) && !mkdir($dir, 0777, true) && !is_dir($dir)) {
        throw new RuntimeException("Cannot create directory: {$dir}");
    }
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    if ($json === false) {
        throw new RuntimeException("Cannot encode JSON for {$path}");
    }
    file_put_contents($path, $json . PHP_EOL);
}

function studly(string $value): string
{
    $parts = preg_split('/[^a-zA-Z0-9]+/', $value) ?: [];
    $parts = array_filter($parts, static fn ($p) => $p !== '');
    $parts = array_map(static fn ($p) => ucfirst(strtolower($p)), $parts);
    return implode('', $parts);
}

function namespaceForComposer(string $composerName): string
{
    $segments = explode('/', $composerName, 2);
    if (count($segments) !== 2) {
        throw new RuntimeException("Invalid composer package name: {$composerName}");
    }
    $project = studly($segments[1]);
    if (str_ends_with(strtolower($project), 'client')) {
        $project = substr($project, 0, -6);
    }
    return 'StevenBuehner\\' . $project;
}

function packageDirFromComposer(string $composerName): string
{
    $segments = explode('/', $composerName, 2);
    if (count($segments) !== 2) {
        throw new RuntimeException("Invalid composer package name: {$composerName}");
    }
    return $segments[1];
}

function ensureGitKeep(string $buildDir): void
{
    if (!is_dir($buildDir) && !mkdir($buildDir, 0777, true) && !is_dir($buildDir)) {
        throw new RuntimeException("Cannot create build directory: {$buildDir}");
    }
    $gitkeep = rtrim($buildDir, '/') . '/.gitkeep';
    if (!file_exists($gitkeep)) {
        file_put_contents($gitkeep, '');
    }
}

function ensureDir(string $path): void
{
    if (!is_dir($path) && !mkdir($path, 0777, true) && !is_dir($path)) {
        throw new RuntimeException("Cannot create directory: {$path}");
    }
}

function moveIfExists(string $from, string $to): void
{
    if (!file_exists($from)) {
        return;
    }
    ensureDir(dirname($to));
    run('rm -rf ' . escapeshellarg($to));
    run('mv ' . escapeshellarg($from) . ' ' . escapeshellarg($to));
}

function updateComposerJson(string $composerPath, array $package, string $version, string $authPackage, string $runtimePackage): void
{
    $raw = file_get_contents($composerPath);
    if ($raw === false) {
        throw new RuntimeException("Cannot read {$composerPath}");
    }
    $json = json_decode($raw, true);
    if (!is_array($json)) {
        throw new RuntimeException("Invalid composer.json in {$composerPath}");
    }

    $json['name'] = $package['composerName'];
    $json['version'] = $version;
    $json['description'] = $package['description'] ?? ($json['description'] ?? 'ChurchTools API package');
    $json['minimum-stability'] = $json['minimum-stability'] ?? 'stable';
    $json['prefer-stable'] = true;
    unset($json['authors'], $json['homepage']);
    $json['require'] = $json['require'] ?? [];
    $json['require']['php'] = '^8.2';
    $json['archive'] = [
        'exclude' => [
            '/test',
            '/docs',
            '/vendor',
            '/phpunit.xml.dist',
            '/.travis.yml',
        ],
    ];

    if (($package['name'] ?? '') !== 'churchtools-auth') {
        $json['require'][$authPackage] = '^' . $version;
    } else {
        unset($json['require'][$authPackage]);
    }
    $json['require'][$runtimePackage] = '^' . $version;

    ksort($json['require']);
    writeJson($composerPath, $json);
}

function prunePublishArtifacts(string $targetDir): void
{
    $paths = ['/test', '/docs', '/vendor', '/phpunit.xml.dist', '/.travis.yml'];
    foreach ($paths as $suffix) {
        $path = $targetDir . $suffix;
        if (!file_exists($path)) {
            continue;
        }
        run('rm -rf ' . escapeshellarg($path));
    }
}

function runPackageTestsIfPresent(string $packageDir): array
{
    $testsDir = $packageDir . '/test';
    if (!is_dir($testsDir)) {
        return ['status' => 'skipped', 'message' => null];
    }
    run('composer -d ' . escapeshellarg($packageDir) . ' install --no-interaction --no-progress');
    if (file_exists($packageDir . '/vendor/bin/phpunit')) {
        passthru('php -d memory_limit=512M '
            . escapeshellarg($packageDir . '/vendor/bin/phpunit')
            . ' -c ' . escapeshellarg($packageDir . '/phpunit.xml.dist'), $code);
        if ((int) $code !== 0) {
            return ['status' => 'warning', 'message' => basename($packageDir) . " (phpunit exit {$code})"];
        }
        return ['status' => 'passed', 'message' => null];
    }
    return ['status' => 'skipped', 'message' => null];
}

$opts = parseArgs(array_slice($argv, 1));
$splitScript = __DIR__ . '/split-openapi.php';

$strictArg = $opts['strict'] ? ' --strict' : '';
$splitCmd = 'php ' . escapeshellarg($splitScript)
    . ' --input=' . escapeshellarg($opts['input'])
    . ' --config=' . escapeshellarg($opts['config'])
    . ' --out=' . escapeshellarg($opts['splits'])
    . $strictArg;
run($splitCmd);

$configRaw = file_get_contents($opts['config']);
if ($configRaw === false) {
    throw new RuntimeException('Cannot read split config.');
}
$config = json_decode($configRaw, true);
if (!is_array($config) || !isset($config['packages']) || !is_array($config['packages'])) {
    throw new RuntimeException('Invalid split config.');
}
$packages = $config['packages'];
if (is_string($opts['package']) && $opts['package'] !== '') {
    $packages = array_values(array_filter($packages, static function (array $package) use ($opts): bool {
        return ($package['name'] ?? '') === $opts['package']
            || ($package['composerName'] ?? '') === $opts['package'];
    }));
    if (count($packages) === 0) {
        throw new RuntimeException("Package not found in split config: {$opts['package']}");
    }
}

$buildDir = rtrim($opts['build'], '/');
 $buildTestsDir = rtrim($opts['build-tests'], '/');
 $buildDocsDir = rtrim($opts['build-docs'], '/');
if ($opts['clean-build'] && is_dir($buildDir)) {
    run('rm -rf ' . escapeshellarg($buildDir));
}
if ($opts['clean-build'] && is_dir($buildTestsDir)) {
    run('rm -rf ' . escapeshellarg($buildTestsDir));
}
if ($opts['clean-build'] && is_dir($buildDocsDir)) {
    run('rm -rf ' . escapeshellarg($buildDocsDir));
}
ensureGitKeep($buildDir);
ensureGitKeep($buildTestsDir);
ensureGitKeep($buildDocsDir);

$baseGenConfigPath = __DIR__ . '/swagger.conf.json';
$baseGenRaw = file_get_contents($baseGenConfigPath);
if ($baseGenRaw === false) {
    throw new RuntimeException('Cannot read swagger.conf.json');
}
$baseGenConfig = json_decode($baseGenRaw, true);
if (!is_array($baseGenConfig)) {
    throw new RuntimeException('Invalid swagger.conf.json');
}

$authPackageName = 'stevenbuehner/churchtools-auth';
$runtimePackageName = 'stevenbuehner/churchtools-runtime-client';
$testWarnings = [];

foreach ($packages as $package) {
    $composerName = $package['composerName'] ?? null;
    $splitName = $package['name'] ?? null;
    if (!is_string($composerName) || !is_string($splitName)) {
        throw new RuntimeException('Each package requires name and composerName.');
    }

    $pkgDirName = packageDirFromComposer($composerName);
    $targetDir = $buildDir . '/' . $pkgDirName;
    $splitSpec = rtrim($opts['splits'], '/') . '/' . $splitName . '/openapi.json';

    if (!file_exists($splitSpec)) {
        throw new RuntimeException("Split spec missing: {$splitSpec}");
    }

    $genConfig = $baseGenConfig;
    $genConfig['invokerPackage'] = namespaceForComposer($composerName);
    $genConfig['composerVendorName'] = explode('/', $composerName, 2)[0];
    $genConfig['composerProjectName'] = $pkgDirName;
    $genConfig['artifactVersion'] = $opts['version'];
    $genConfig['packagePath'] = strtolower(studly($pkgDirName));
    $genConfig['srcBasePath'] = 'src';

    $tempConfig = sys_get_temp_dir() . '/ct-gen-' . md5($composerName . $opts['version']) . '.json';
    writeJson($tempConfig, $genConfig);

    $cmd = 'openapi-generator generate'
        . ' -i ' . escapeshellarg($splitSpec)
        . ' -g php'
        . ' -o ' . escapeshellarg($targetDir)
        . ' -c ' . escapeshellarg($tempConfig)
        . ' -t ' . escapeshellarg($opts['templates'])
        . ' --skip-validate-spec';
    run($cmd);
    if ($opts['run-tests'] === true) {
        $testResult = runPackageTestsIfPresent($targetDir);
        if (($testResult['status'] ?? '') === 'warning') {
            $testWarnings[] = (string) ($testResult['message'] ?? basename($targetDir));
        }
    }

    updateComposerJson($targetDir . '/composer.json', $package, $opts['version'], $authPackageName, $runtimePackageName);
    moveIfExists($targetDir . '/test', $buildTestsDir . '/' . $pkgDirName . '/test');
    moveIfExists($targetDir . '/phpunit.xml.dist', $buildTestsDir . '/' . $pkgDirName . '/phpunit.xml.dist');
    moveIfExists($targetDir . '/docs', $buildDocsDir . '/' . $pkgDirName . '/docs');
    if ($opts['keep-test-artifacts'] !== true) {
        prunePublishArtifacts($targetDir);
    }

    if (!is_dir($targetDir . '/.git')) {
        run('git -C ' . escapeshellarg($targetDir) . ' init');
    }
}

echo "Package generation complete in {$buildDir}\n";
if (count($testWarnings) > 0) {
    echo "Test warnings (non-blocking): " . implode(', ', $testWarnings) . "\n";
}
