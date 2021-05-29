FROM alpine:3.12
LABEL owner="sbudding"

RUN apk update && apk upgrade
RUN apk add openrc
RUN apk add mariadb \
            mariadb-client

COPY ./srcs/startuem.sh .
COPY ./srcs/TheAnswerIs42.sql .
COPY ./srcs/my.cnf /etc/my.cnf
COPY ./srcs/wordpress_conf.sql .

VOLUME ["/var/lib/mysql"]

EXPOSE 3306

ENTRYPOINT ["sh", "startuem.sh"]
