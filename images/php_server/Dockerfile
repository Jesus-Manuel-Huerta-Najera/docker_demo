FROM ubuntu:20.04
ARG DEBIAN_FRONTEND=noninteractive
LABEL description = "Imagen "
LABEL mainteiner = "Jesus Manuel HN"
LABEL version = "0.1"

RUN apt update
RUN apt -y install php7.4
RUN apt -y install apache2
RUN apt -y install php libapache2-mod-php
RUN apt -y install php-cli
RUN apt -y install php-cgi
RUN systemctl restart apache2.service 
RUN apt -y install sqlite3
RUN apt -y install php7.4-sqlite
EXPOSE 8080/tcp