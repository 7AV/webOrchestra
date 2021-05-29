#!/bin/bash

minikube stop
minikube delete
minikube start --vm-driver=virtualbox --disk-size=5000MB

eval $(minikube docker-env)
minikube addons enable metallb
minikube addons enable dashboard
minikube addons enable metrics-server

kubectl apply -f ./srcs/metallb-config.yaml

docker build srcs/Nginx -t img_nginx
kubectl apply -f ./srcs/nginx

docker build srcs/WordPress -t img_wordpress
kubectl apply -f ./srcs/wordpress

docker build srcs/PhpMyAdmin -t img_phpmyadmin
kubectl apply -f ./srcs/phpmyadmin

docker build srcs/MySQL -t img_mysql
kubectl apply -f ./srcs/mysql

docker build srcs/PhpMyAdmin -t img_phpmyadmin
kubectl apply -f ./srcs/phpmyadmin

docker build srcs/FTPS -t img_ftps
kubectl apply -f ./srcs/ftps

docker build srcs/InfluxDB -t img_influxdb
kubectl apply -f ./srcs/influxdb

docker build srcs/Telegraf -t img_telegraf
kubectl apply -f ./srcs/telegraf

docker build srcs/Grafana -t img_grafana
kubectl apply -f ./srcs/grafana

minikube dashboard