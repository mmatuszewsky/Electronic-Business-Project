openssl req -newkey rsa:2048 -new -nodes -x509 -days 365 -keyout /etc/ssl/private/selfsigned.key -out /etc/ssl/certs/selfsigned.crt -subj "/C=PL/ST=Pomorskie/L=Gdansk/O=superkursy/OU=./CN=localhost"

cp /tmp/php.ini /usr/local/etc/php/php.ini
cp /tmp/000-default.conf /etc/apache2/sites-available/000-default.conf
a2enmod ssl
