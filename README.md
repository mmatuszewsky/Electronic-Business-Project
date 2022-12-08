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
