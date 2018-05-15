FROM centos:latest AS centos-epel

LABEL \
    maintainer = "yangalor@gmail.com" \
    version = "0.1" \
    description = "Базовый образ iTop на основе CentOS"
    
RUN 	yum -y update && \
	yum -y --enablerepo=extras install epel-release && \
	yum -y upgrade && \
	yum -y clean all && \
	rm -rf /var/cache/yum
	
FROM centos-epel AS centos-epel-www

RUN 	yum -y install https://mirror.webtatic.com/yum/el7/webtatic-release.rpm && \
	yum -y update && \
	yum -y install httpd \
	               mysql \
	               mod_ssl \
	               php56w \
	               php56w-mysql \
	               php56w-mcrypt \
	               php56w-xml \
	               php56w-cli \
	               php56w-soap \
	               php56w-ldap \
	               php56w-gd \
	               crontabs \
	               graphviz && \
	yum -y clean all && \
	rm -rf /var/cache/yum
FROM centos-epel-www AS centos-epel-itop

ADD ./web /var/www/html
RUN chown apache.apache /var/www/html && \
    chown apache.apache -R /var/www/html/log && \
    chown apache.apache -R /var/www/html/data

ADD ./entry-point.sh /

EXPOSE 80 443

CMD /entry-point.sh

FROM centos-epel-itop AS centos-epel-itop-dev

ADD ./toolkit /var/www/html/toolkit
