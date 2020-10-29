init:
	docker-compose up -d --build
	docker-compose exec app composer install
	docker-compose exec app cp .env.dev .env
	docker-compose exec app php artisan key:generate
	docker-compose exec app php artisan migrate

destroy:
	docker-compose down --rmi all --volumes

init-without-docker:
	cp .env.example .env
	composer install
	npm install && npm run dev
	php artisan key:generate
	php artisan migrate
	php artisan serve