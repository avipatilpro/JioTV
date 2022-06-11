FROM php:7.4.30-apache-buster
COPY .htaccess /var/www/html/.htaccess
COPY . /var/www/html/JioTV
WORKDIR /var/www/html
RUN chmod -R 777 /var/www/html
