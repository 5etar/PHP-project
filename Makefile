up:
	docker-compose up -d

ps:
	docker-compose ps

build:
	docker-compose build

logs:
	docker-compose logs

kill:
	docker-compose kill
	docker-compose rm --force

killall:
	docker kill `docker ps -q`
	docker rm `docker ps -aq`

stop:
	docker-compose stop
	docker-compose rm --force

pull:
	docker-compose pull

shell:
	docker-compose exec website bash

composer-install:
	docker-compose run --rm composer sh -c "composer --working-dir=/app --ignore-platform-reqs install"

composer-update:
	docker-compose run --rm composer sh -c "composer --working-dir=/app --ignore-platform-reqs update"

cache-clear:
	docker-compose exec website bash -c "php bin/console cache:clear"

clear-cache: encore-install-and-run cache-clear

schema-update:
	docker-compose exec website bash -c "php bin/console doctrine:schema:update --force"

fixtures-load:
	docker-compose exec website bash -c "php bin/console doctrine:fixtures:load"

migrations-migrate:
	docker-compose exec website bash -c "php bin/console doctrine:migrations:migrate --no-interaction"

yarn-install:
	docker-compose run --rm node sh -c "yarn install"

encore-run:
	docker-compose run --rm node sh -c "yarn run encore dev"

encore-install-and-run:
	docker-compose run --rm node sh -c "yarn install && yarn run encore dev"