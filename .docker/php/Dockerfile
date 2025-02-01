FROM php:8.3-fpm

COPY php.ini $PHP_INI_DIR

RUN apt-get update \
    && apt-get install -y zlib1g-dev g++ git libicu-dev zip libzip-dev libpq-dev libssh-dev librabbitmq-dev \
    && pecl install apcu amqp \
    && docker-php-ext-enable apcu amqp \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo pdo_pgsql pgsql intl bcmath sockets pcntl\
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony5/bin/symfony /usr/local/bin/symfony \
    && git config --global user.email "v1adt3r@gmail.com" \
    && git config --global user.name "v1adt3r"