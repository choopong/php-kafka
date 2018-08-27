FROM php:7.1-fpm

RUN mkdir /tmp/librdkafka/

RUN curl -L https://github.com/edenhill/librdkafka/archive/v0.11.5.tar.gz --output /tmp/librdkafka/librdkafka.tar.gz

RUN tar -xvf /tmp/librdkafka/librdkafka.tar.gz -C /tmp/librdkafka/

RUN cd /tmp/librdkafka/$(ls /tmp/librdkafka/) && \
    ./configure && \
    make && \ 
    make install

RUN pecl install rdkafka
RUN docker-php-ext-enable rdkafka

RUN rm -rf /tmp/librdkafka/