docker-compose run -rm wp composer install
docker-compose run -rm wp composer update
docker-compose run -rm node yarn
docker-compose run -rm node yarn run build:prod