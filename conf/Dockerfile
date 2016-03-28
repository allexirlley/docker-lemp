FROM php:5.6.8-fpm
RUN docker-php-ext-install mysqli && docker-php-ext-install mysql
EXPOSE 9000
CMD ["php-fpm"]
