#!/usr/bin/env sh
set -eu

cd /var/www/html

log() {
    echo "[container] $1"
}

format_env_value() {
    VALUE="$1"
    ESCAPED_VALUE=$(printf '%s' "$VALUE" | sed 's/\\/\\\\/g; s/"/\\"/g')
    printf '"%s"' "$ESCAPED_VALUE"
}

sync_env_value() {
    KEY="$1"
    VALUE="$2"

    if [ ! -f .env ]; then
        return
    fi

    FORMATTED_VALUE=$(format_env_value "$VALUE")
    ESCAPED_VALUE=$(printf '%s' "$FORMATTED_VALUE" | sed 's/[\/&]/\\&/g')

    if grep -q "^${KEY}=" .env; then
        sed -i "s/^${KEY}=.*/${KEY}=${ESCAPED_VALUE}/" .env
    else
        printf '\n%s=%s\n' "$KEY" "$FORMATTED_VALUE" >> .env
    fi
}

if [ ! -f .env ] && [ -f .env.example ]; then
    log "No .env found. Copying from .env.example"
    cp .env.example .env
fi

for KEY in \
    APP_NAME \
    APP_ENV \
    APP_DEBUG \
    APP_URL \
    APP_KEY \
    LOG_CHANNEL \
    LOG_STACK \
    LOG_LEVEL \
    DB_CONNECTION \
    DB_HOST \
    DB_PORT \
    DB_DATABASE \
    DB_USERNAME \
    DB_PASSWORD \
    SESSION_DRIVER \
    SESSION_DOMAIN \
    CACHE_STORE \
    QUEUE_CONNECTION; do
    eval "CURRENT_VALUE=\${$KEY:-}"

    if [ -n "${CURRENT_VALUE}" ]; then
        sync_env_value "$KEY" "$CURRENT_VALUE"
    fi
done

mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache database
touch database/database.sqlite
chmod -R ug+rw storage bootstrap/cache database 2>/dev/null || true

if [ -z "${APP_KEY:-}" ] && [ -f .env ] && ! grep -q '^APP_KEY=base64:' .env; then
    log "Generating APP_KEY"
    php artisan key:generate --force --ansi
fi

if [ -z "${APP_KEY:-}" ] && [ -f .env ] && grep -q '^APP_KEY=base64:' .env; then
    APP_KEY_FROM_ENV_FILE="$(grep '^APP_KEY=' .env | tail -n 1 | cut -d '=' -f2-)"

    if [ -n "$APP_KEY_FROM_ENV_FILE" ]; then
        log "Exporting APP_KEY from .env for current runtime"
        export APP_KEY="$APP_KEY_FROM_ENV_FILE"
    fi
fi

CACHE_STORE=file php artisan optimize:clear --ansi || true

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

if [ "${QUEUE_CONNECTION:-sync}" = "database" ] && [ "$MIGRATION_OK" != "true" ]; then
    log "QUEUE_CONNECTION=database but migrations unavailable. Falling back to sync queue"
    export QUEUE_CONNECTION="sync"
fi

log "Starting Laravel server on port ${PORT:-8080}"
exec php artisan serve --host=0.0.0.0 --port="${PORT:-8080}"