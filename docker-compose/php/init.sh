#!/bin/bash

cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan jwt:generate-certs --force --passphrase=$(openssl rand -hex 20)

php-fpm