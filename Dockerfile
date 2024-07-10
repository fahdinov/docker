FROM php:7.2-apache

RUN apt-get update

RUN docker-php-ext-install mysqli

COPY . /var/www/html

COPY php.ini /usr/local/etc/php

EXPOSE 8080:80
