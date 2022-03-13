FROM nginx:latest

RUN apt-get update && apt-get install -y \
        nginx-extras

COPY ./nginx.conf /etc/nginx/nginx.conf