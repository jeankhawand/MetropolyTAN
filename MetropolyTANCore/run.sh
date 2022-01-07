#!/bin/bash
composer install
yarn install
yarn run dev
# chown -R $USER:www-data bootstrap/cache storage
# chmod -R 775 storage/ bootstrap/cache
php artisan key:generate --force
php artisan migrate:fresh
php artisan module:seed
# php artisan db:seed --force
# php artisan passport:install --force
php-fpm

