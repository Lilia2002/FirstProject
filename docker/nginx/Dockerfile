FROM nginx:stable

ARG CFG_FILE=nginx.conf

COPY ${CFG_FILE} /etc/nginx/conf.d/default.conf

WORKDIR /srv/app
