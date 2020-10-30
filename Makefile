up:
	docker-compose up -d

down:
	docker-compose down

init:
	docker-compose up -d --build
	docker-compose exec app composer install
	@make npm
	docker-compose exec app cp .env.dev .env
	docker-compose exec app php artisan key:generate
	docker-compose exec app php artisan migrate:fresh --seed
	docker-compose exec app php artisan route:clear
	docker-compose exec app php artisan config:clear
	docker-compose exec app php artisan cache:clear
	docker-compose exec app php artisan storage:link

destroy:
	docker-compose down --rmi all --volumes

init-without-docker:
	cp .env.example .env
	composer install
	npm install && npm run dev
	php artisan key:generate
	php artisan migrate:fresh --seed
	php artisan route:clear
	php artisan config:clear
	php artisan cache:clear
	php artisan storage:link
	php artisan serve

restart:
	@make down
	@make up

remake:
	@make destroy
	@make init

npm :
	docker-compose exec app npm install
	docker-compose exec app npm run dev

sql:
	docker-compose exec db bash -c 'mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE'

docker-install:
	sudo apt-get remove docker docker-engine docker.io containerd runc
	sudo apt-get update
	sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg-agent \
    software-properties-common
	curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
	sudo apt-key fingerprint 0EBFCD88
	sudo add-apt-repository \
	"deb [arch=amd64] https://download.docker.com/linux/ubuntu \
	$(lsb_release -cs) \
	stable"
	sudo apt-get update
	sudo apt-get install docker-ce docker-ce-cli containerd.io