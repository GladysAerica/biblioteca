#!/bin/bash

#iniciar PHP-FPM  en background
php-fpm &

#esperar un poco
sleep 3

#generar key si no existe
#php artisan key:generate --force


# Cambia esto temporalmente para limpiar los nombres mal escritos
#php artisan migrate:fresh --force
php artisan migrate --force

#migraciones (opcional)
#php artisan migrate --force

#cachear config
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

#iniciar nginx
nginx -g "daemon off;"