#!/bin/bash

docker volume create itop-vol
docker 	run -d --mount source=itop-vol,target=/var/lib/mysql \
	-e TZ=Europe/Moscow \
	-e MYSQL_ROOT_PASSWORD= \
	--name itop-db mariadb \
	--max_allowed_packet=64M \
	--query_cache_size=32M \
	--innodb_log_file_size=256M \
	--character-set-server=utf8 \
	--collation-server=utf8_general_ci