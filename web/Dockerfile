### Container para Web

FROM php:5.6-apache 

RUN docker-php-ext-install mysql
RUN a2enmod rewrite
RUN service apache2 restart
