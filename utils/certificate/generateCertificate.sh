DOMAIN=selfsigned
CA=SuperKurs
openssl genrsa -out ../../docker/ssl/$DOMAIN.key 2048
openssl req -new -key ../../docker/ssl/$DOMAIN.key -out $DOMAIN.csr

cat > ./tmp/$DOMAIN.ext << EOF
authorityKeyIdentifier=keyid,issuer
basicConstraints=CA:FALSE
keyUsage = digitalSignature, nonRepudiation, keyEncipherment, dataEncipherment
subjectAltName = @alt_names
[alt_names]
DNS.1 = localhost
EOF

openssl x509 -req -in $DOMAIN.csr -CA ./tmp/$CA.pem -CAkey ./tmp/$CA.key -CAcreateserial \
-out ../../docker/ssl/$DOMAIN.crt -days 825 -sha256 -extfile ./tmp/$DOMAIN.ext