#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
OPENAPI_FILE="$ROOT_DIR/material/openapi/openapi.json"

VERSION=""
RUN_TESTS=true
STRICT=true
DRY_RUN=false

usage() {
  cat <<'EOF'
Usage: ./update.sh [options]

Options:
  --version <semver>     Version fuer alle Pakete (default: YYYY.MM.DD-HHMM)
  --no-tests             Paket-Tests beim Generieren nicht ausfuehren
  --no-strict            Strict-Checks deaktivieren
  --dry-run              Befehle nur anzeigen, nicht ausfuehren
  -h, --help             Hilfe anzeigen
EOF
}

log() {
  printf '[%s] %s\n' "$(date '+%Y-%m-%d %H:%M:%S')" "$*"
}

run() {
  if $DRY_RUN; then
    printf 'DRY-RUN: %s\n' "$*"
    return 0
  fi
  eval "$@"
}

require_cmd() {
  if ! command -v "$1" >/dev/null 2>&1; then
    echo "Fehlendes Kommando: $1" >&2
    exit 1
  fi
}

while [[ $# -gt 0 ]]; do
  case "$1" in
    --version)
      VERSION="${2:-}"
      shift 2
      ;;
    --no-tests)
      RUN_TESTS=false
      shift
      ;;
    --no-strict)
      STRICT=false
      shift
      ;;
    --dry-run)
      DRY_RUN=true
      shift
      ;;
    -h|--help)
      usage
      exit 0
      ;;
    *)
      echo "Unbekannte Option: $1" >&2
      usage
      exit 2
      ;;
  esac
done

if [[ -z "$VERSION" ]]; then
  VERSION="$(date '+%Y.%m.%d-%H%M')"
fi

log "Starte Update-Pipeline"
log "Repo: $ROOT_DIR"
log "Version: $VERSION"
log "Tests: $RUN_TESTS"
log "Strict: $STRICT (Hinweis: unmapped paths brechen update.sh nicht ab)"

require_cmd php
require_cmd jq
require_cmd curl
require_cmd openapi-generator

if [[ ! -s "$OPENAPI_FILE" ]]; then
  echo "Lokale openapi.json nicht gefunden: $OPENAPI_FILE" >&2
  exit 1
fi
log "Nutze lokale OpenAPI Datei: $OPENAPI_FILE"

STRICT_FLAG=""
if $STRICT; then
  STRICT_FLAG="--strict"
fi

TEST_FLAG=""
if ! $RUN_TESTS; then
  TEST_FLAG="--no-run-tests"
fi

REPORT_FILE="$ROOT_DIR/build-splits/split-report.json"

log "Splitte OpenAPI in Pakete"
# Split ohne strict, damit unmapped paths nur reportet werden
run "php '$ROOT_DIR/material/openapi/split-openapi.php'"

if [[ -f "$REPORT_FILE" ]]; then
  UNMAPPED_COUNT="$(jq -r '.unmappedPaths | length' "$REPORT_FILE")"
  if [[ "$UNMAPPED_COUNT" != "0" ]]; then
    log "WARNUNG: $UNMAPPED_COUNT unmapped paths gefunden:"
    run "jq -r '.unmappedPaths[] | \"  - \\(.)\"' '$REPORT_FILE'"
  else
    log "Keine unmapped paths gefunden"
  fi
fi

log "Generiere Composer-Pakete"
run "php '$ROOT_DIR/material/openapi/generate-packages.php' --version='$VERSION' $TEST_FLAG"
if [[ -f "$REPORT_FILE" ]]; then
  log "Split Report"
  run "jq -r '\"  paths=\\(.pathCount) operations=\\(.operationCount) unmapped=\\(.unmappedPaths|length) packages=\\(.packages|keys|length)\"' '$REPORT_FILE'"
fi

if [[ -d "$ROOT_DIR/build-packages" ]]; then
  log "Generierte Paketgroessen"
  run "for d in '$ROOT_DIR'/build-packages/*; do [ -d \"\$d\" ] || continue; c=\$(find \"\$d/src\" -type f -name '*.php' 2>/dev/null | wc -l | tr -d ' '); printf '  %s: %s src-Dateien\\n' \"\$(basename \"\$d\")\" \"\$c\"; done | sort"
fi

log "Update abgeschlossen"
