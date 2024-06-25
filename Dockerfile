FROM ubuntu:latest
LABEL authors="Yevhenii"

# Используем официальный образ PHP с Apache
FROM php:7.4-apache

# Устанавливаем необходимые расширения PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Копируем содержимое текущей директории в директорию веб-сервера
COPY . /var/www/html/

# Устанавливаем права на директорию хранения данных
RUN chown -R www-data:www-data /var/www/html/assets/storage/data
RUN chmod -R 775 /var/www/html/assets/storage/data

# Открываем порт 80
EXPOSE 80
