FROM php:7.4-apache
RUN apt-get update
RUN docker-php-ext-install mysqli
COPY . /web
RUN chown -R www-data:www-data /var/www
RUN chmod o-wx /var/www
COPY . /trucorp-db.sql /docker-entrypoint-initb.d/ 
