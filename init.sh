#!/bin/bash

cp ./www/og-contact-api/.env.example ./www/og-contact-api/.env

docker compose up database -d &&
docker compose up app -d &&
docker compose up web -d &&

wait

#Load laravel configs
docker exec -it og-contact-api-php composer install
docker exec -it og-contact-api-php php artisan key:generate
docker exec -it og-contact-api-php php artisan migrate
docker exec -it og-contact-api-php php artisan db:seed
docker exec -it og-contact-api-php php artisan jwt:generate-certs --force --passphrase=$(openssl rand -hex 20)
