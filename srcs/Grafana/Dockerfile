FROM alpine:3.12
LABEL owner="sbudding"

RUN apk update && apk upgrade 
RUN apk add wget libc6-compat
RUN wget https://dl.grafana.com/oss/release/grafana-7.1.3.linux-amd64.tar.gz
RUN tar -xf grafana-7.1.3.linux-amd64.tar.gz

ENV PATH=/grafana-7.1.3/bin:$PATH
WORKDIR /grafana-7.1.3

RUN echo -e "[security]\nadmin_user = user\nadmin_password = password" > conf/custom.ini
COPY ./srcs/datasource.yaml conf/provisioning/datasources/  
COPY ./srcs/dashboards.yaml conf/provisioning/dashboards/
COPY ./srcs/dashboards/* /var/lib/grafana/dashboards/
COPY ./srcs/startuem.sh .
RUN chmod 777 startuem.sh

EXPOSE 3000

ENTRYPOINT ["sh", "startuem.sh"]