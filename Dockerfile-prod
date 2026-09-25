FROM ubuntu/apache2
ARG ARG_ENV
ENV APP_ENV=$ARG_ENV
WORKDIR /var/www/html
COPY index.html .
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
