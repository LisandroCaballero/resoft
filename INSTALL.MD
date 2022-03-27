# APP WEB RESOFT

## Setup

##### Docker

To run this application in Docker, first create a network as follow:
> docker network create --driver=bridge --subnet=172.19.0.0/16  resoft

Create docker-compose file from example
> cp docker-compose.example.yml docker-compose.yml

Set up .env file
> cp .env.example .env

**Important! Change the DB parameters in the .env file before build the containers**
Then, build all containers
> docker-compose build


And customize as needed. Also, configure your /etc/hosts file:
> 127.0.0.1   resoft.local


Finally, start the app
> docker-compose up -d

Install composer
> docker-compose exec app composer install -vvv --prefer-dist
