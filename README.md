# sb-churchtools-api

## Projektstatus

Dieses Projekt wurde von einem einzelnen, großen PHP-Client auf mehrere eigenständige Composer-Pakete umgestellt.

Die bisherige Nutzung als monolithisches Paket (`stevenbuehner/sb-churchtools-api`) ist damit abgelöst.

## Neue Struktur

- Dieses Repository ist jetzt primär das **Generator-/Orchestrator-Repo**.
- Die OpenAPI-Spezifikation liegt versioniert unter:
  - `material/openapi/openapi.json`
- Daraus werden segmentierte Pakete generiert (z. B. `churchtools-auth`, `churchtools-people`, `churchtools-events`, ...).
- Zusätzlich gibt es ein separates Runtime-Paket mit den Client-Helfern:
  - `packages/churchtools-runtime-client`

## Geplanter Workflow

1. `openapi.json` lokal manuell aktualisieren.
2. Änderungen in diesem Repository committen.
3. Nach GitHub pushen.
4. GitHub Actions generiert pro Segment ein eigenes Paket inkl. zugehöriger Tests.

## Wichtige Pfade

- Split-Artefakte (temporär): `build-splits/`
- Generierte Pakete: `build-packages/`
- Test-Artefakte: `build-tests/`
- Doku-Artefakte: `build-docs/`

## Hinweis

Die eigentlichen API-Clients werden künftig als Einzelpakete verteilt.
Dieses Repository dient der Pflege der OpenAPI-Datei, Split-Regeln und Build-/Release-Automation.
