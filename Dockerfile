FROM php:7.0-apache
#RUN docker-php-ext-install pdo pdo_mysql
RUN apt update -y && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY database.php insert.php process.php /var/www/html/smriti/
