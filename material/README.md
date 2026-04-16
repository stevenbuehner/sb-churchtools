# Material / Generator-Doku

## Zweck

Dieses Verzeichnis enthält die Build- und Generatorlogik, um aus der versionierten
`material/openapi/openapi.json` mehrere ChurchTools-Composer-Pakete zu erzeugen.

## Wichtige Dateien

- `material/openapi/openapi.json`  
  Versionierte OpenAPI-Spezifikation (Source of Truth).
- `material/openapi/split-packages.json`  
  Segmentierung der Endpunkte in Zielpakete.
- `material/openapi/split-openapi.php`  
  Erstellt Split-Spezifikationen pro Paket.
- `material/openapi/generate-packages.php`  
  Erzeugt die Composer-Pakete aus den Splits.
- `update.sh` (Repo-Root)  
  Orchestriert den lokalen End-to-End-Lauf.

## Voraussetzungen

- PHP 8.2+
- `openapi-generator` CLI im PATH
- `jq`
- `curl`
- Java Runtime (für OpenAPI Generator)

## Lokaler Ablauf

### 1) OpenAPI-Datei aktualisieren (direkter Download)

```bash
cd ~/Sites/sb-churchtools-api
curl -fsSL "https://teambb.church.tools/system/runtime/swagger/openapi.json" -o ./material/openapi/openapi.json
```

### 2) Testen, ob der Build laufen wird

Schneller Dry-Run:

```bash
./update.sh --dry-run --version 1.2.3
```

Split prüfen:

```bash
php ./material/openapi/split-openapi.php --input=./material/openapi/openapi.json
```

Generierung lokal prüfen (ohne Tests):

```bash
php ./material/openapi/generate-packages.php --version=1.2.3 --no-run-tests
```

Optional mit Tests:

```bash
php ./material/openapi/generate-packages.php --version=1.2.3
```

### 3) Push zu GitHub

```bash
git add .
git commit -m "Update openapi.json and regenerate package setup"
git push
```

## Ausgabe-Verzeichnisse

- Split-Artefakte: `build-splits/`
- Generierte Pakete: `build-packages/`
- Test-Artefakte: `build-tests/`
- Doku-Artefakte: `build-docs/`

## Hinweise zu Tests

- Tests werden pro generiertem Paket ausgeführt (wenn vorhanden).
- Test-Warnungen sind non-blocking.
- Test-/Doku-Dateien werden aus den veröffentlichbaren Paketordnern entfernt und separat abgelegt.

## CI / GitHub Actions

Der Workflow unter:

- `.github/workflows/generate-packages.yml`

arbeitet mit der im Repository gespeicherten OpenAPI-Datei (kein Live-Download) und baut Pakete je Segment als Matrix-Job.
