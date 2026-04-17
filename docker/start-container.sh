#!/usr/bin/env sh
set -eu

cd /var/www/html

log() {
    echo "[container] $1"
}

if [ ! -f .env ] && [ -f .env.example ]; then
    log "No .env found. Copying from .env.example"
    cp .env.example .env
fi

mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache database
touch database/database.sqlite
chmod -R ug+rw storage bootstrap/cache database 2>/dev/null || true

if [ -z "${APP_KEY:-}" ] && [ -f .env ] && ! grep -q '^APP_KEY=base64:' .env; then
    log "Generating APP_KEY"
    php artisan key:generate --force --ansi
fi

php artisan optimize:clear --ansi || true

RUN_MIGRATIONS_VALUE="${RUN_MIGRATIONS:-true}"
MIGRATION_OK="false"

if [ "$RUN_MIGRATIONS_VALUE" = "true" ]; then
    log "Running database migrations"
    if php artisan migrate --force --graceful --ansi; then
        MIGRATION_OK="true"
    else
        log "Migration failed. Continuing with safe runtime fallbacks"
    fi
else
    log "RUN_MIGRATIONS=false. Skipping migrations"
fi

if [ "${SESSION_DRIVER:-file}" = "database" ] && [ "$MIGRATION_OK" != "true" ]; then
    log "SESSION_DRIVER=database but migrations unavailable. Falling back to file session"
    export SESSION_DRIVER="file"
fi

if [ "${CACHE_STORE:-file}" = "database" ] && [ "$MIGRATION_OK" != "true" ]; then
    log "CACHE_STORE=database but migrations unavailable. Falling back to file cache"
    export CACHE_STORE="file"
fi

log "Starting Laravel server on port ${PORT:-8080}"
exec php artisan serve --host=0.0.0.0 --port="${PORT:-8080}"