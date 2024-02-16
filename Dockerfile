# Dockerfile
FROM php:8.2-cli

RUN apt-get update -y && apt-get install -y libmcrypt-dev

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --version=1.9.1 --filename=composer && php -r "unlink('composer-setup.php');" || php -r "unlink('composer-setup.php');"

WORKDIR /var/www/html
COPY . /var/www/html

RUN composer install

EXPOSE 3100
CMD php artisan serve --host=0.0.0.0 --port=8000
