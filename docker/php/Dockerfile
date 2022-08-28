FROM php:8.0-fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update \
  && apt-get install -y zlib1g-dev mariadb-client vim libzip-dev \
  && docker-php-ext-install zip pdo_mysql

WORKDIR /var/www

#Composer install
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

#node.js install
RUN apt-get update \
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs npm

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin

RUN composer global require "laravel/installer"



# FROM php:7.3-fpm 
# COPY php.ini /usr/local/etc/php/
# RUN apt-get update && apt-get install -y \
#     zlib1g-dev \
#     libzip-dev \
#     vim \
#   && docker-php-ext-install zip pdo_mysql opcache
# WORKDIR /var/www
# COPY --from=composer /usr/bin/composer /usr/bin/composer　
# ENV COMPOSER_ALLOW_SUPERUSER 1 
# ENV COMPOSER_HOME /composer
# ENV PATH $PATH:/composer/vendor/bin
# RUN composer global require "laravel/installer"