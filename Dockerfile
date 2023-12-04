# Dockerfile
FROM php:7.2-apache
LABEL maintainer="hoge"
COPY ./ /var/www/html/
