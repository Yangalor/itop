FROM yangalor/centos-epel:latest

LABEL \
    maintainer = "yangalor@gmail.com" \
    version = "0.4" \
    description = "Базовый образ CentOS 7/EPEL с Apache2 PHP56 MariaDB"
    
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
