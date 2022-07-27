FROM tutum/lamp
LABEL maintainer="wpsec"
COPY ./app/nav.php /var/www/html/
COPY ./app/access.log /var/www/html/
COPY ./app/index.php /var/www/html/
COPY ./app/footer.php /var/www/html/
COPY ./app/upload.php /var/www/html/
COPY ./app/adminlogin.php /var/www/html/
RUN mkdir /var/www/html/js && mkdir /var/www/html/admin && mkdir /var/www/html/fonts && mkdir /var/www/html/css
COPY ./app/css/* /var/www/html/css/
COPY ./app/fonts/* /var/www/html/fonts/
COPY ./app/js/* /var/www/html/js/
COPY ./app/admin/* /var/www/html/admin/