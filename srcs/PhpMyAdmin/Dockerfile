FROM alpine:3.12
LABEL owner="sbudding"

RUN apk update && apk upgrade
RUN apk add wget nginx openrc supervisor
RUN apk add php7 \
            php7-fpm \
            php7-opcache \
            php7-gd \
            php7-mysqli \
            php7-zlib \
            php7-curl \
            php7-mbstring \
            php7-json \
            php7-session

RUN mkdir -p /www
RUN mkdir -p /run/nginx

RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN tar zxvf phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages /www/phpmyadmin

COPY ./srcs/default.conf /etc/nginx/conf.d/default.conf
COPY ./srcs/supervisord.conf /etc/supervisord.conf
COPY ./srcs/config.inc.php /www/phpmyadmin/config.inc.php
RUN chmod -R 777 /www/phpmyadmin
RUN chmod 644 /www/phpmyadmin/config.inc.php
COPY ./srcs/startuem.sh .

EXPOSE 5000

ENTRYPOINT ["sh", "startuem.sh"]
