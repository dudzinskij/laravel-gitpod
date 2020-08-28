#!/bin/bash

cp .env ./laravel/.env

cd ./laravel

touch ./database/database.sqlite

composer install
php artisan key:generate
php artisan migrate