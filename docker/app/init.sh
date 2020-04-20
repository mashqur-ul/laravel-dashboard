#!/bin/sh
set -e
chown -R www-data storage
chown -R www-data bootstrap/cache
nginx -g 'daemon off;' &
php-fpm # & supervisord
