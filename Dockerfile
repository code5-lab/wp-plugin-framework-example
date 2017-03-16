FROM wordpress:php7.1

RUN docker-php-ext-install pdo pdo_mysql
