FROM tutum/lamp
LABEL maintainer="wpsec"
COPY ./app/nav.php /var/www/html/
COPY ./app/key.php /var/www/html/
COPY ./app/index.php /var/www/html/
COPY ./app/footer.php /var/www/html/
RUN mkdir /var/www/html/js && mkdir /var/www/html/vulnerabilities && mkdir /var/www/html/fonts && mkdir /var/www/html/css
COPY ./app/css/* /var/www/html/css/
COPY ./app/fonts/* /var/www/html/fonts/
COPY ./app/js/* /var/www/html/js/
COPY ./app/vulnerabilities/* /var/www/html/vulnerabilities/