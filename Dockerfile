# Stage 1 : Base PHP avec extensions préinstallées
FROM php:8.3-fpm

# Installer les dépendances système nécessaires pour les extensions
RUN apt-get update && apt-get install -y \
    git zip unzip libicu-dev libxml2-dev libzip-dev libpng-dev \
    && docker-php-ext-install intl opcache pdo_mysql zip gd \
    && rm -rf /var/lib/apt/lists/*

# Copier Composer depuis l'image officielle
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copier uniquement les fichiers de dépendances pour profiter du cache Docker
COPY composer.json composer.lock ./

# Installer les dépendances PHP
RUN composer install --no-interaction --optimize-autoloader

# Copier le reste de l’application
COPY . .

# Config Git pour répertoires sûrs
RUN git config --global --add safe.directory /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
