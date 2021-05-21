#!/usr/bin/env bash

wget https://mirrors.aliyun.com/composer/composer.phar -O /usr/local/bin/composer
chmod a+x /usr/local/bin/composer
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
composer u -o --no-dev
chown -R www:www runtime
