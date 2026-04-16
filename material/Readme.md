
```shell
# See: https://github.com/OpenAPITools/openapi-generator
wget https://repo1.maven.org/maven2/org/openapitools/openapi-generator-cli/5.4.0/openapi-generator-cli-5.4.0.jar -O openapi-generator-cli.jar
sudo apt-get install java
sudo apt install default-jre
sudo apt-get update
sudo apt install default-jre
sudo apt install openjdk-11-jre-headless
sudo apt install openjdk-8-jre-headless
```

Templates können hier gefunden werden:
https://github.com/OpenAPITools/openapi-generator/tree/master/modules/openapi-generator/src/main/resources/php

## Generiere neue API
### Setup
```shell
brew intall java
brew install openapi-generator
```

### Run
```shell
cd ~/Sites/sb-churchtools-api/material/openapi
wget -c https://teambb.church.tools/system/runtime/swagger/openapi.json
cd ~/Sites/sb-churchtools-api       
# /opt/homebrew/Cellar/openjdk/19.0.1/bin/java -jar ./material/openapi/openapi-generator-cli-5.4.0.jar  generate -i ./material/openapi/openapi.json -g php -o ./src -c ./material/openapi/swagger.conf.json --skip-validate-spec 
openapi-generator generate -i ./material/openapi/openapi.json -g php -o ./src -c ./material/openapi/swagger.conf.json -t ./material/openapi/templates --skip-validate-spec
 ```

### OpenAPI in Subpakete splitten
```shell
cd ~/Sites/sb-churchtools-api
php ./material/openapi/split-openapi.php
```

Strict Check (CI-geeignet, bricht bei neuen unmappeden Pfaden ab):
```shell
php ./material/openapi/split-openapi.php --strict
```

Konfiguration:
- `material/openapi/split-packages.json` enthält die Paket-Regeln (`pathPrefixes`, `tags`, `defaultPackage`).
- Bei Änderungen in `openapi.json` werden die Split-Dateien unter `build-splits/<paket>/openapi.json` neu erzeugt.
- Der Drift-Report liegt unter `build-splits/split-report.json` (u. a. `unmappedPaths`, `unmappedAdded`, `unmappedRemoved`).

### Composer-Pakete für alle API-Segmente generieren
```shell
cd ~/Sites/sb-churchtools-api
php ./material/openapi/generate-packages.php --version=1.2.3 --strict
```

Optional ohne Testausführung:
```shell
php ./material/openapi/generate-packages.php --version=1.2.3 --strict --no-run-tests
```

Ergebnis:
- Generierte Pakete liegen unter `build-packages/<composer-project-name>`.
- Jedes Paket erhält einen eigenen Namespace im Format `StevenBuehner\<ComposerProjectStudlyOhneClientSuffix>`.
- Alle Pakete außer `stevenbuehner/churchtools-auth` erhalten eine harte Dependency auf `stevenbuehner/churchtools-auth` in derselben Major/Minor-Serie.
- Pro Paket wird ein eigenes Git-Repo initialisiert (`git init` in jedem Paketordner), damit die Repos direkt separat gepusht werden können.
- Tests werden automatisch ausgeführt, falls vorhanden (pro Paket).
- `Incomplete`/`Deprecations` sind non-blocking; Abbruch erfolgt nur bei echten PHPUnit-Fehlern (`FAILURES`/`ERRORS`/`Fatal error`).
- Test-Artefakte werden nach `build-tests/<composer-project-name>/...` ausgelagert.
- Doku-Artefakte werden nach `build-docs/<composer-project-name>/...` ausgelagert.
- Der veröffentlichbare Paketordner bleibt dadurch schlank (ohne `test`/`docs`).

Wichtige Dateien:
- `material/openapi/split-packages.json`: Segmentierung, Composer-Namen, Beschreibung.
- `material/openapi/split-openapi.php`: Robustes Splitten + Drift-Report.
- `material/openapi/generate-packages.php`: End-to-end Generate für alle Composer-Bibliotheken.

### Test (müssten erst händisch implementiert werden)
Übernehme ggf. Änderungen aus der Datei /src/phpunit.xml.dist in /phpunit.xml.dist
```shell
php -d memory_limit=256M ./vendor/bin/phpunit 
 ```

### Eigene Tests mit Debug laufen lassen
```shell
cd ~/Sites/sb-churchtools-api   
php -dxdebug.idekey=PhpStorm1 -dxdebug.start_with_request=yes -dxdebug.mode=debug -dxdebug.client_port=9000 -dxdebug.client_host=192.168.3.28 material/cli-test/test.1.php   
```

## Alte Befehle gespeichert
```shell
java -jar swagger-codegen-cli.jar generate -i https://teambb.church.tools/system/runtime/swagger/openapi.json -l php -o /home/vagrant/sb-churchtools-api/src -c swagger.conf.json
```

```shell
java -jar openapi-generator-cli.jar generate -i https://teambb.church.tools/system/runtime/swagger/openapi.json -g php -o /home/vagrant/sb-churchtools-api/src -c swagger.conf.json --skip-validate-spec
```
