#!/usr/bin/env bash
set -euo pipefail
ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "$ROOT"

if command -v docker >/dev/null 2>&1 && docker compose version >/dev/null 2>&1; then
  echo "Starting stack (PHP 8.2 + Apache, fixtures on)…"
  echo "  Homepage: http://127.0.0.1:8080/index.php"
  echo "  Mining calculator: http://127.0.0.1:8080/Mining-Profits.html?fixtures=1"
  exec docker compose up
fi

if command -v php >/dev/null 2>&1; then
  echo "Docker not found; using PHP built-in server."
  echo "  Homepage: http://127.0.0.1:8080/index.php"
  echo "  Mining calculator: http://127.0.0.1:8080/Mining-Profits.html?fixtures=1"
  exec php -S 127.0.0.1:8080 -t "$ROOT"
fi

echo "Install Docker (with compose) or PHP 8.1+ to run the dev server." >&2
exit 1
