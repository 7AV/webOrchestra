FROM alpine:3.12
LABEL owner="sbudding"

RUN apk update && apk upgrade 
RUN apk add influxdb

COPY ./srcs/startuem.sh .

EXPOSE 8086

ENTRYPOINT ["sh", "startuem.sh"]