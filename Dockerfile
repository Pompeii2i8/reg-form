FROM ubuntu:latest
LABEL authors="Yevhenii"

FROM php:7.4-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/assets/storage/data
RUN chmod -R 775 /var/www/html/assets/storage/data

EXPOSE 80
