install:
	composer install

validate:
	composer validate

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

brain-games:
	./bin/brain-games

brain-progression:
	./bin/brain-progression

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-prime:
	./bin/brain-prime

brain-gcd:
	./bin/brain-gcd