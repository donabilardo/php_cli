FROM nginx:mainline-alpine

VOLUME /data
WORKDIR /data
COPY gb.com.conf /etc/nginx/conf.d/gb.com.conf


CMD ["nginx", "-g", "daemon off;"]