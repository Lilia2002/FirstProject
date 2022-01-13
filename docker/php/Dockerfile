FROM timofeyn/zimalab-php:8.0-alpine3.14 AS symfony_php

RUN apk add chromium

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint
COPY crontab /etc/crontabs/www-data

COPY symfony.ini /usr/local/etc/php/conf.d/symfony.ini


RUN chmod +x /usr/local/bin/docker-entrypoint

RUN apk add --update nodejs npm
RUN apk add yarn

WORKDIR /var/www/html
ENTRYPOINT ["docker-entrypoint"]
CMD ["php-fpm"]