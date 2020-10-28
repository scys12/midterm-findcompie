# FindCompie Web

## Introduction

This laravel website using Docker 🐳 as development environment.

## How to use

First, you have to install docker. You can install docker [here](https://https://docs.docker.com/get-docker).

```bash
git clone git@github.com:scys12/midterm-findcompie
cd midterm-findcompie
make init
```
Open the website using *http://your_public_ip_addr* or *http://localhost*

You can remove container with this command
```bash
make destroy
```
## Alternative

If you don't want to use docker, you can run these commands. But before, create the database in .env.example.
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=midterm-findcompie
DB_USERNAME=root
DB_PASSWORD=
```
After you create the database, you can run commands below.
```bash
git clone git@github.com:scys12/midterm-findcompie
cd midterm-findcompie
make init-without-docker
```

## Container structure
```bash
├── app
├── webserver
└── db
```
- Images
  - [php](https://hub.docker.com/_/php):7.4-fpm
  - [nginx](https://hub.docker.com/_/nginx):nginx:alpine
  - [mysql](https://hub.docker.com/_/mysql):5.7.22

## Deploy to server
Coming soon...