FROM quay.io/centos/centos:stream9

RUN dnf -y update && \
    dnf -y install vim wget git net-tools mariadb php-cli && \
    dnf clean all

CMD ["/bin/bash"]

