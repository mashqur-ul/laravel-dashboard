FROM php:7.4.4-fpm

# RUN printf "deb http://archive.debian.org/debian/ jessie main\ndeb-src http://archive.debian.org/debian/ jessie main\ndeb http://security.debian.org jessie/updates main\ndeb-src http://security.debian.org jessie/updates main" > /etc/apt/sources.list

RUN apt-get update && apt-get install -y \
    git \
    zip \
    nginx \
        libmcrypt-dev \
        zlib1g \
        zlib1g-dev \
        libzip-dev \
        libicu-dev \
        libxpm-dev \
        libssl-dev \
        libonig-dev \
        g++ \
    && docker-php-ext-install iconv \
        pdo_mysql \
        zip \
        mbstring \
        exif

RUN apt-get update && apt-get install -y \
        libmagickwand-dev --no-install-recommends

RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl

WORKDIR /var/www/app

COPY init.sh /usr/local/bin

RUN curl -sS https://getcomposer.org/installer | \
php -- --install-dir=/usr/bin/ --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER=1

ENTRYPOINT ["/usr/local/bin/init.sh"]
