FROM php:7.4-fpm
RUN apt-get update && apt-get install -y zlib1g-dev libpng-dev curl libicu-dev libxml2-dev g++ libxslt-dev libzip-dev zip 

RUN docker-php-ext-install mysqli pdo pdo_mysql gettext zip gd intl xmlrpc soap opcache xsl\
    && docker-php-ext-enable mysqli pdo pdo_mysql gd intl xmlrpc soap opcache xsl
# Install YAML extension
RUN apt-get install libyaml-dev -y
RUN  pecl install yaml && echo "extension=yaml.so" > /usr/local/etc/php/conf.d/ext-yaml.ini && docker-php-ext-enable yaml


