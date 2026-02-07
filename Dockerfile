FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    libpng-dev

# Install PHP extensions for Zend/Revolut
RUN docker-php-ext-install intl pdo_mysql zip gd

# Enable Apache rewrite for Zend Framework routing
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html