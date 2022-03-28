FROM php:8.1.4-fpm-alpine

# Install apk packages we want
RUN apk add -Uuv \
    git bash supervisor freetype-dev libjpeg-turbo-dev libzip-dev \
    libpng-dev postgresql-dev nginx \
    && rm -rf /var/cache/apk/*

RUN ln -s /usr/bin/php8 /usr/bin/php


# Install Postgres extension
RUN set -ex && apk --no-cache add postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql

# Install GD
RUN apk add --no-cache libpng libpng-dev && docker-php-ext-install gd && apk del libpng-dev

# install git, nodejs, npm, and openssh-client
RUN apk add --update --no-cache \
    -X http://dl-cdn.alpinelinux.org/alpine/edge/main \
    git \
    nodejs \
    npm \
    openssh-client

# Install NodeJS
RUN apk add --update nodejs npm

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
