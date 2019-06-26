FROM nanoninja/php-fpm

RUN apt-get update && apt-get install -y \
    procps

COPY ./php.ini /usr/local/etc/php/conf.d/php.ini
