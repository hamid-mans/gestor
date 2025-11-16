FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git zip unzip libicu-dev libxml2-dev libzip-dev libpng-dev \
    && docker-php-ext-install intl opcache pdo_mysql zip gd \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./

RUN composer install --no-interaction --optimize-autoloader

COPY . .

RUN git config --global --add safe.directory /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
