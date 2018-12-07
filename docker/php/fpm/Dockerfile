FROM php:7.2-fpm

ADD ./docker/php/fpm/usr/local/etc/php-fpm.d /usr/local/etc/php-fpm.d

RUN apt-get update \
    && apt-get install --no-install-recommends --no-install-suggests -y libpq-dev \
    && docker-php-ext-install pdo_pgsql \
    && rm -rf /var/lib/apt/lists/* /var/cache/*
