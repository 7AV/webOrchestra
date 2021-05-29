FROM alpine:3.12
LABEL owner="sbudding"

RUN apk update && apk upgrade 
RUN apk add wget nginx openssl openssh openrc supervisor
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

RUN wget https://wordpress.org/latest.zip
RUN unzip latest.zip
RUN mkdir -p /www
RUN mv wordpress /www/

RUN adduser -D -g 'www' www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www

COPY ./srcs/wp-config.php /www/wordpress/

RUN rm -rf /etc/nginx/conf.d/default.conf
COPY ./srcs/default.conf /etc/nginx/conf.d/default.conf
COPY ./srcs/supervisord.conf /etc/supervisord.conf

COPY ./srcs/startuem.sh .
RUN chmod 777 startuem.sh
RUN mkdir -p /run/nginx

EXPOSE 5050

ENTRYPOINT ["sh", "startuem.sh"]