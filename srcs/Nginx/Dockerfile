FROM alpine:3.12
LABEL owner="sbudding"

RUN apk update && apk upgrade
RUN apk add nginx openssl openssh openrc supervisor

RUN rm -rf /etc/nginx/conf.d/default.conf
COPY ./srcs/default.conf /etc/nginx/conf.d/nginx.conf
COPY ./srcs/supervisord.conf /etc/supervisord.conf
COPY ./srcs/neindex.html /var/www/nginx/neindex.html

RUN	mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -subj "/CN=sbudding" -out /etc/nginx/ssl/cert.pem -keyout /etc/nginx/ssl/key.key
RUN echo -e "password\npassword\n" | adduser user
COPY ./srcs/startuem.sh .
RUN chmod 777 startuem.sh
RUN mkdir -p /run/nginx

EXPOSE 80 443 22

CMD ["sh", "startuem.sh"]