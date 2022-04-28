FROM ubuntu/bind9

RUN apt update && apt upgrade -y

COPY named.conf /etc/bind/

COPY l2-8.ephec-ti.be  /var/lib/bind/
