FROM php:8.2-apache

# Copy your PHP code into the container
COPY . /var/www/html/

# Enable Apache Rewrite Module
RUN a2enmod rewrite
