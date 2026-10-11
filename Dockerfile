FROM php:8.4-cli

RUN apt-get update && apt-get install -y libpq-dev

RUN docker-php-ext-install pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y libpq-dev unzip