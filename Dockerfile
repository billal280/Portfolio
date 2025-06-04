FROM php:8.2-apache

COPY . /var/www/html/

# To enable apache rewrite module
RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

EXPOSE 80