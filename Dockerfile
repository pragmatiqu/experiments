# Use the official PHP 8.3-fpm image as the base
FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install zip pdo pdo_sqlite

# Install Redis extension for PHP
RUN pecl install redis && docker-php-ext-enable redis

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js (LTS version) and npm
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get install -y nodejs

# Set working directory
WORKDIR /var/www/html

# Set permissions for Laravel (assuming app will be copied later)
RUN chown -R www-data:www-data /var/www/html

# Run PHP FPM server by default
CMD ["php-fpm"]
