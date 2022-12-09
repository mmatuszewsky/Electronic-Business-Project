#!/bin/sh
mkdir ./tmp
CA=SuperKurs
openssl genrsa -out ./tmp/$CA.key 2048
openssl req -x509 -new -nodes -key ./tmp/$CA.key -sha256 -days 1825 -out ./docker/ssl/$CA.pem -batch
DOMAIN=selfsigned
openssl genrsa -out ./docker/ssl/$DOMAIN.key 2048
openssl req -new -key ./docker/ssl/$DOMAIN.key -out ./tmp/$DOMAIN.csr -batch

cat > ./tmp/$DOMAIN.ext << EOF
authorityKeyIdentifier=keyid,issuer
basicConstraints=CA:FALSE
keyUsage = digitalSignature, nonRepudiation, keyEncipherment, dataEncipherment
subjectAltName = @alt_names
[alt_names]
DNS.1 = localhost
EOF

openssl x509 -req -in ./tmp/$DOMAIN.csr -CA ./docker/ssl/$CA.pem -CAkey ./tmp/$CA.key -CAcreateserial \
-out ./docker/ssl/$DOMAIN.crt -days 825 -sha256 -extfile ./tmp/$DOMAIN.ext

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
rm -r ./tmp