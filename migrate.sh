#!/bin/sh

docker cp docker/ssl/selfsigned.key electronic-business-project-prestashop-1:/etc/ssl/private/selfsigned.key
docker cp docker/ssl/selfsigned.crt electronic-business-project-prestashop-1:/etc/ssl/certs/selfsigned.crt

docker exec -it $1 rm -rf /etc/apache2/sites-available/000-default.conf
docker cp docker/ssl/000-default.conf $1:/etc/apache2/sites-available/000-default.conf

docker exec -it $1 mysql -u root -proot -D prestashop -h mariadb -e "UPDATE ps_shop_url SET domain='$2', domain_ssl='$2' WHERE id_shop_url=1;"
docker exec -it $1 mysql -u root -proot -D prestashop -h mariadb -e "UPDATE ps_homeslider_slides_lang SET url=REPLACE(url, 'localhost', '$2');"
docker exec -it $1 mysql -u root -proot -D prestashop -h mariadb -e "UPDATE ps_configuration_lang SET value=REPLACE(value, 'localhost', '$2') WHERE id_configuration=434;"
docker exec -it $1 a2enmod ssl
docker exec -it $1 service apache2 restart
docker-compose up -d