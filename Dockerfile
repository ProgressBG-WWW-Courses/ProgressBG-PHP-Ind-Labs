FROM php:8.5-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy your source code into the Apache document root
COPY . /var/www/html/

# Optional: Install common extensions (e.g., PDO MySQL)
# RUN docker-php-ext-install pdo_mysql

# Apache is already configured to expose port 80
EXPOSE 80