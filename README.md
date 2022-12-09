# Electronic-Business-Project
Repo for Electronic Business Project

Helpful links:
 - https://thepylot.dev/install-prestashop-mysql-by-using-docker-containers/
 - https://www.youtube.com/watch?v=yxzD-YLKyNk&ab_channel=ThePylot `specially prestashop configuration!`

### Steps:
 - Clone the repo (prefarably to WSL distro)
 - Delete or change names of other containers (see compose file)
 - Run the compose file: `docker compose up -d`
 - Configure prestashop (not tested)
 - If you encounter errors like `access denied` just run in WSL terminal `sudo chmod -R 777 .`


### Enabling SSL
- run ./migrate.sh electronic-business-project-prestashop-1 localhost **this will compose your docker container again- you will probably have to import sql again**
- Launch mmc (win+r -> type in mmc -> enter)
- Do these steps in mmc: https://docs.google.com/document/d/1Od-U08KLJX15MFcLinv_Jk-DoGzwvN7DkfjQVVuTA_E/edit using ./docker/ssl/SuperKurs.pem
