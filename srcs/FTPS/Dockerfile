FROM alpine:3.12
LABEL owner="sbudding"

RUN apk update && apk upgrade 
RUN apk add vsftpd openssl

RUN	openssl req -x509 -nodes -days 365 -newkey rsa:2048	-subj "/CN=sbudding" \
	-keyout /etc/ssl/private/vsftpd.pem	-out /etc/ssl/private/vsftpd.pem	

RUN echo -e "sbudding\nsbudding\n" | adduser sbudding

COPY ./srcs/vsftpd.conf	/etc/vsftpd/vsftpd.conf
COPY ./srcs/startuem.sh .

EXPOSE 	20 21 21000 

ENTRYPOINT ["sh", "startuem.sh"]

