FROM php:8.0-apache
WORKDIR /var/www/html
COPY SQLite/ ./
EXPOSE 80