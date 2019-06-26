FROM nginx:latest

RUN apt-get update && apt-get install -y \
    procps

COPY ./index.html  /usr/share/nginx/html/index.html

COPY ./index.php  /var/www/html/public/index.php

COPY ./default.conf /etc/nginx/conf.d/default.conf
