composer:
	 docker run --rm --interactive --tty \
      --volume $(shell pwd):/app \
      composer/composer install
setup:
	make composer
	make start
	./vendor/bin/sail artisan migrate
	./vendor/bin/sail artisan key:generate
start:
	./vendor/bin/sail up -d
