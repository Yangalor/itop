#!/bin/bash

ITOP_HOME=""
CA_HOME="$ITOP_HOME"

docker	run --rm -d --link itop-db -p 80:80 -p 443:443 \
	-e TZ=Europe/Moscow \
	-v "$ITOP_HOME"/cfg/params:/etc/itop/params \
	-v "$ITOP_HOME"/cfg/ssl.conf:/etc/httpd/conf.d/ssl.conf \
	-v "$CA_HOME"/certs/localhost.crt:/etc/pki/tls/certs/localhost.crt \
	-v "$CA_HOME"/certs/localhost.key:/etc/pki/tls/private/localhost.key \
	-v "$CA_HOME"/ca/ca-bundle.crt:/etc/pki/tls/certs/ca-bundle.crt \
	-v "$CA_HOME"/crl/signing-ca.crl:/etc/pki/tls/crl/ca-bundle.crl \
	--name itop-srv yangalor/itop