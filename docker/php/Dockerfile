FROM php:8.1-apache

WORKDIR /var/www/html

# xdebug install
RUN apt-get update \
  && apt-get install -y libonig-dev libzip-dev unzip \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug

# composer install (phpのパッケージ管理システム)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# DockerイメージにPHP関連ファイルをコピーする。
COPY ./app /var/www/html
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY ./docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini