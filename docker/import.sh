#!/bin/bash

DATABASE_CONTAINER="BE_184372_mariadb"
DATABASE_NAME="prestashop"
DATABASE_USER="user"
DATABASE_PASSWORD="password"
DATABASE_ROOT_PASSWORD="root"
DATABASE_ROOT_LOGIN="root"
LOAD_FILE="./db/dump.sql"

docker exec -it $(docker ps -q -f name=$DATABASE_CONTAINER) mysql -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD -e "CREATE DATABASE IF NOT EXISTS ${DATABASE_NAME};"
docker exec -it $(docker ps -q -f name=$DATABASE_CONTAINER) mysql -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD -e "CREATE USER IF NOT EXISTS ${DATABASE_USER}@'%' IDENTIFIED BY '${DATABASE_PASSWORD}';"
docker exec -it $(docker ps -q -f name=$DATABASE_CONTAINER) mysql -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON ${DATABASE_NAME}.* TO '${DATABASE_USER}'@'%';"
docker exec -it $(docker ps -q -f name=$DATABASE_CONTAINER) mysql -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD -e "FLUSH PRIVILEGES;"
docker exec -i $(docker ps -q -f name=$DATABASE_CONTAINER) mysql -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD $DATABASE_NAME < $LOAD_FILE