FROM php:7.1-fpm-stretch

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils
RUN apt-get install -y zlib1g-dev libicu-dev g++

RUN docker-php-ext-install gettext intl
RUN docker-php-ext-install mysqli pdo_mysql mbstring