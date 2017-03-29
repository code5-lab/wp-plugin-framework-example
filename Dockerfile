FROM wordpress:php7.1

RUN docker-php-ext-install pdo pdo_mysql

RUN touch /usr/local/etc/php/conf.d/uploads.ini \
    && echo "upload_max_filesize = 100M;" >> /usr/local/etc/php/conf.d/uploads.ini
