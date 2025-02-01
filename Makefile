up:
	docker-compose up -d
down:
	docker-compose down
build:
	docker-compose build --no-cache
start: build up
res: down up