<?php

namespace Php\Project\Lvl1\Games\even;

use function Php\Project\Lvl1\general\run;

const TASK = 'Answer "yes" if number even otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function play(): void
{
    $getResult = function (): array {
        $question = rand(1, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };
    run(TASK, $getResult);
}
