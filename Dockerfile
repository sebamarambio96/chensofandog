# Dockerfile
FROM php:8.2-cli

RUN apt-get update -y && apt-get install -y libmcrypt-dev

RUN wget https://raw.githubusercontent.com/composer/getcomposer.org/1b137f8bf6db3e79a38a5bc45324414a6b1f9df2/web/installer -O - -q | php -- --quiet
RUN mv composer.phar /usr/local/bin/composer

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN docker-php-ext-install pdo mbstring

WORKDIR /var/www/html
COPY . /var/www/html

RUN composer install

EXPOSE 3100
CMD php artisan serve --host=0.0.0.0 --port=8000
