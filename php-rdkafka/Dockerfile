FROM php:7.1-fpm

RUN mkdir /tmp/librdkafka/ && \
    curl -L https://github.com/edenhill/librdkafka/archive/v0.11.5.tar.gz --output /tmp/librdkafka/librdkafka.tar.gz && \
    tar -xvf /tmp/librdkafka/librdkafka.tar.gz -C /tmp/librdkafka/ && \
    cd /tmp/librdkafka/$(ls /tmp/librdkafka/) && \
    ./configure && \
    make && \ 
    make install && \
    pecl install rdkafka && \
    docker-php-ext-enable rdkafka && \
    rm -rf /tmp/librdkafka/