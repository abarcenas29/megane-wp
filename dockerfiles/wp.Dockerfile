FROM richarvey/nginx-php-fpm

RUN apk update && apk upgrade

ENV MEMCACHED_DEPS zlib-dev libmemcached-dev cyrus-sasl-dev
RUN apk add --no-cache --update libmemcached-libs zlib
RUN set -xe \
    && apk add --no-cache --update --virtual .phpize-deps $PHPIZE_DEPS \
    && apk add --no-cache --update --virtual .memcached-deps $MEMCACHED_DEPS \
    && pecl install memcached \
    && echo "extension=memcached.so" > /usr/local/etc/php/conf.d/20_memcached.ini \
    && rm -rf /usr/share/php7 \
    && rm -rf /tmp/* \
    && apk del .memcached-deps .phpize-deps

RUN apk --no-cache add openrc openssl

ENV COMPOSER_VERSION 1.5.2
RUN apk --no-cache add --update curl && openssl && \
                                curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=${COMPOSER_VERSION} && \
                                chmod +x /usr/local/bin/composer && \
                                apk del curl openssl && \
                                rm -rf /var/cache/apk/*
RUN php-fpm -D

ENV HOME=/app
WORKDIR $HOME
