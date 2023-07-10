#!/bin/sh

rm index.html

mysql_secure_installation

mariadb -e "CREATE DATABASE cinetrack;"
mariadb -e "CREATE USER 'cinetrack'@'%' IDENTIFIED BY 'admin';"
mariadb -e "GRANT ALL ON cinetrack.* TO 'cinetrack'@'%';"
mariadb -e "FLUSH PRIVILEGES;"
mariadb -e "CREATE TABLE cinetrack.users (id INT AUTO_INCREMENT, username VARCHAR(255), password VARCHAR(255), PRIMARY KEY(id));"

curl -sS https://getcomposer.org/installer | php
composer require guzzlehttp/guzzle:^7.0

printf "Paste your TheMovieDB Access Token: (Click on Account > Settings > API > API Read Access Token) " >&2
read -r token

mkdir -p config

echo "HOST='localhost'
DBUSER='cinetrack'
DBPASS='admin'
TABLE='cinetrack'
ACCESS_TOKEN='$token'" > config/.env
