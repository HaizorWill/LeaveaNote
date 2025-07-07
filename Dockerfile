FROM php:8.4-apache
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . /var/www/LeaveaNote

ENV APACHE_ROOT=/var/www/LeaveaNote
ENV DB_URI=localhost

RUN sed -ri -e "s!/var/www/html!${APACHE_ROOT}!g" /etc/apache2/sites-available/*.conf
RUN sed -ri -e "s!/var/www/!${APACHE_ROOT}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN sed -ri -e "s!mongodbhost!${DB_URI}!g" /var/www/LeaveaNote/.env
RUN apt-get update && apt-get install -y libzip-dev zip unzip
RUN docker-php-ext-install zip && apt-get clean && rm -rf /var/lib/apt/lists/*
RUN pecl install mongodb && docker-php-ext-enable mongodb
WORKDIR /var/www/LeaveaNote/
RUN composer install

EXPOSE 80