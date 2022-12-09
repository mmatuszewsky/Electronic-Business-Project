# Adding ssl to presta docker container - a quick tutorial
##### Instead of doing steps 1-2 you can also use SuperKurs.pem file provided in certificate/tmp
1. Launch generateCA.sh
2. Press enter on every prompt (doesn't matter if you type something in)
3. Launch mmc (win+r -> type in mmc -> enter)
4. do these steps in mmc: https://docs.google.com/document/d/1Od-U08KLJX15MFcLinv_Jk-DoGzwvN7DkfjQVVuTA_E/edit
##### Instead of doing steps 5-6 you can also use files provided in docker/ssl 
5. Launch generateCertificate.sh
6. Press enter on every prompt (doesn't matter if you type something in)
7. Launch migrate.sh: it should look like this **./migrate.sh electronic-business-project-prestashop-1 localhost**  _(if you haven't previously composed docker container you need to do it first and wait a few seconds for the db to connect)_
8. If you haven't imported sql db file you will need to go into the admin panel to enable ssl
