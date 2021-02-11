<?php

namespace Php\Project\Lvl1\Games\prime;

use function Php\Project\Lvl1\general\run;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    // false for negatives, 0 and 1
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function play(): void
{
    $getResult = function () {
        $num = rand(1, 100);
        $result = isPrime($num) ? "yes" : "no";
        $question = $num;
        return [$question, $result];
    };
    run(TASK, $getResult);
}
