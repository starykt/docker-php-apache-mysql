FROM php:8.0-apache

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo pdo_mysql
RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
