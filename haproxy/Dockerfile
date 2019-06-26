FROM haproxy:1.8

RUN apt-get update && apt-get install -y \
    curl \
    jq

COPY haproxy.cfg /usr/local/etc/haproxy/haproxy.cfg

COPY external-scipt.sh /usr/local/etc/haproxy/external-scipt.sh
