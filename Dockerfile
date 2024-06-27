FROM php:7.4-apache
LABEL authors="Yevhenii"

RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 80
