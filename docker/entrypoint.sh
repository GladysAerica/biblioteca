#!/bin/bash

#iniciar PHP-FPM  en background
php-fpm &

#esperar un poco
sleep 3

#generar key si no existe









# Ejecutar migraciones
echo "Ejecutando migraciones..."
php artisan migrate --force

#migraciones (opcional)
#php artisan migrate --force



#cachear config
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache

#iniciar nginx
nginx -g "daemon off;"