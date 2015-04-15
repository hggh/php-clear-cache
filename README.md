# php-clear-cache
Script to clear PHP FPM Cache from Shell.


## Debian Package

you can build a debian package:

    debuild

## Install

    mkdir /usr/share/php-clear-cache
    cp _php-clear-cache.php /usr/share/php-clear-cache/php-clear-cache.php
    cp php-clear-cache /usr/bin/

## Usage

if you have a PHP pool with the configuration file ```/etc/php5/fpm/pool.d/www.conf````you can clear the apc/apcu and or opcode cache with:

    php-clear-cache -p www

## sudo

if your PHP FPM sockets have no read/write permissions for the Shell user you can use sudo.


## Requirements

* Perl
* FCGI::Client (https://github.com/hggh/libfcgi-client-perl)
