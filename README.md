# Ralcontrol

Website statico para apresentação dos produtos e informações para contato.

Website desenvolvido com as tecnologias
  - HTML
  - CSS
  - Flash

# Docker

Docker rodando com NGINX

##### Como iniciar

Iniciando com o **DOCKER-COMPOSE**
```sh
$ docker-compose build
$ docker-compose up -d
```

Iniciando com o **DOCKER** para compartilhar o volume
```sh
$ cd docker
$ docker run --name ralcontrol -d -p "80:80" -v "LOCAL_PROJECT_PATH/code:/var/www" cesao89/ralcontrol
```
