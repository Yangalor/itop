FROM centos:latest

LABEL \
    maintainer = "yangalor@gmail.com" \
    version = "0.1" \
    description = "Базовый образ CentOS 7 с последними обновлениями и EPEL"
    
RUN 	yum -y update && \
	yum -y --enablerepo=extras install epel-release && \
	yum -y upgrade && \
	yum -y clean all && \
	rm -rf /var/cache/yum
