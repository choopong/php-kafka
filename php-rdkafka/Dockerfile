FROM php:7.1-fpm

COPY librdkafka/ /tmp/librdkafka

WORKDIR /tmp/librdkafka

RUN ./configure && \
  make && \ 
  make install

RUN pecl install rdkafka
RUN docker-php-ext-enable rdkafka

RUN rm -rf /tmp/librdkafka