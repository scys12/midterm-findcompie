init:
	docker-compose up -d --build
	docker-compose exec app php artisan migrate

destroy:
	docker-compose down --rmi all --volumes

init-without-docker:
	cp .env.example .env
	composer install
	php artisan key:generate
	php artisan migrate
	php artisan serve