FROM php:fpm-alpine
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo_mysql pdo_pgsql gd  exif pcntl bcmath zip gmp intl @composer
RUN apk add --no-cache --upgrade bash nodejs yarn git shadow bash
ARG USER_ID
ARG GROUP_ID
RUN if [ ${USER_ID:-0} -ne 0 ] && [ ${GROUP_ID:-0} -ne 0 ]; then \
    userdel -f www-data &&\
    if getent group www-data ; then groupdel www-data; fi &&\
    groupadd -g ${GROUP_ID} www-data &&\
    useradd -l -u ${USER_ID} -g www-data www-data &&\
    install -d -m 0755 -o www-data -g www-data /home/www-data &&\
    mkdir /home/www-data/.composer && \
    chown --changes --silent --no-dereference --recursive \
    ${USER_ID}:${GROUP_ID} \
    /home/www-data \
    ;fi
USER www-data

WORKDIR /var/www
COPY run.sh ./
ENTRYPOINT ["/bin/sh","run.sh"]