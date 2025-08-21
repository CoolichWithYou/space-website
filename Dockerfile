FROM php:8.2-apache

RUN apt-get update && apt-get install -y libzip-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

RUN sed -i 's|AllowOverride None|AllowOverride All|' /etc/apache2/apache2.conf
