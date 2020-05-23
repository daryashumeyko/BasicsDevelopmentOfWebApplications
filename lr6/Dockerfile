# Для начала указываем исходный образ, он будет использован как основа
FROM php:7.4.3-fpm-alpine

# RUN выполняет идущую за ней команду в контексте нашего образа.
# Для установки модулей используем команду docker-php-ext-install.
# На каждый RUN создается новый слой в образе, поэтому рекомендуется объединять команды.
RUN docker-php-ext-install pdo mysqli pdo_mysql

# Указываем рабочую директорию для PHP
WORKDIR /var/www

COPY ./www /var/www

EXPOSE 9000

# Запускаем контейнер
# Из документации: The main purpose of a CMD is to provide defaults for an executing container. These defaults can include an executable, 
# or they can omit the executable, in which case you must specify an ENTRYPOINT instruction as well.
CMD ["php-fpm"]
