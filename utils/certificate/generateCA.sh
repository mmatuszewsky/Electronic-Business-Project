CA=SuperKurs
openssl genrsa -out ./tmp/$CA.key 2048
openssl req -x509 -new -nodes -key ./tmp/$CA.key -sha256 -days 1825 -out ./tmp/$CA.pem

# certutil -addstore -f "ROOT" /CA/$CA.pem # should be done manually via mmc