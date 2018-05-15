FROM yangalor/centos-epel-www:latest

LABEL \
    maintainer = "yangalor@gmail.com" \
    version = "0.3" \
    description = "iTop"

ADD ./web /var/www/html
RUN chown apache.apache /var/www/html && \
    chown apache.apache -R /var/www/html/log && \
    chown apache.apache -R /var/www/html/data

ADD ./entry-point.sh /

EXPOSE 80 443

CMD /entry-point.sh