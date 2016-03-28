# Docker LEMP

Nginx, MariaDB and PHP-FPM with Docker

## How to run

Just `docker-compose up` and grab a beer :beers:

## Customization

#### PHP Extensions
Edit `conf/Dockerfile` to install additional PHP Extensions and run `docker-compose build`.

#### PHP Settings
Change PHP settings at `conf/php.ini`.

#### Nginx Settings
Change Nginx settings at `conf/nginx.conf`.
