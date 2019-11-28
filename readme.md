## Install

preparing:
```
 Install Docker Desktop
  add to your hosts file:
    127.0.0.1 demo.local #Linux
    10.0.75.2 demo.local #Windows
```
copy from repository

run docker in project folder:
```
docker-compose up
```

enter to container:
```
docker exec -ti ex_app sh
or
docker exec -ti ex_app /bin/bash
or 
docker exec -ti ex_app bash 
```
copy .env file:
```
cp .env.example .env #Linux

copy .env.example .env #Windows
```

install deps in container:
```
composer install
```
install front from project folder:
```
npm i
```
run migration:
```
php artisan migrate
```


generate application key:
```
php artisan key:generate
php artisan jwt:secret
```

## DONE!
