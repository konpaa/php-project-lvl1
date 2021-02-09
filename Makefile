install:
	composer install
	asciinema play 239367.cast


brain-games:
	./bin/brain-games

validate:
	composer validate

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

brain-even:
	asciinema play 239367.cast
	./bin/brain-even