FROM composer:2 AS composer_deps

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --prefer-dist \
    --optimize-autoloader \
    --no-scripts

COPY . .

RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --prefer-dist \
    --optimize-autoloader


FROM node:24-bookworm-slim AS frontend_assets

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

COPY . .

RUN chmod +x node_modules/vite/bin/vite.js && npm run build


FROM php:8.3-cli-bookworm AS runtime

ENV APP_ENV=production \
    PORT=8080

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libicu-dev \
    libsqlite3-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install bcmath intl pdo_mysql pdo_sqlite opcache \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer_deps /app /var/www/html
COPY --from=frontend_assets /app/public/build /var/www/html/public/build
COPY docker/start-container.sh /usr/local/bin/start-container

RUN chmod +x /usr/local/bin/start-container \
    && mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache database \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R ug+rw storage bootstrap/cache database

USER www-data

EXPOSE 8080

CMD ["start-container"]