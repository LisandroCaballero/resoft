FROM nginx:alpine

ADD vhost.conf /etc/nginx/conf.d/default.conf
ADD resoft.local.crt /etc/nginx/ssl/resoft.local.crt
ADD resoft.local.key /etc/nginx/ssl/resoft.local.key

WORKDIR /var/www
