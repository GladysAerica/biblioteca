#----- Etapa 1: Build de front -----
FROM node:20 as node-builder

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build

#----- Etapa 2: Build de back -------
FROM php:8.4-fpm

#instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

#instalar composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#crear directorio app
WORKDIR /var/www

#copiar proyecto
COPY . .

#copiar assets ya compilados
COPY --from=node-builder /app/public/build /var/www/public/build

#instalar dependencias laravel
RUN composer install --no-dev --optimize-autoloader

#permisos
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

#copiar configuracion nginx
COPY docker/nginx.conf /etc/nginx/sites-enabled/default

#script de arranque
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 10000

CMD ["/entrypoint.sh"]