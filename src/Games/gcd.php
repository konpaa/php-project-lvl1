<?php

namespace Php\Project\Lvl1\Games\gcd;

use function Php\Project\Lvl1\general\run;

const GAME_RULE_GCD = "Find the greatest common divisor of given numbers.";

const TASK = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function play(): void
{
    $getResult = function (): array {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $result = gcd($a, $b);
        $question = "$a $b";
        return [$question, $result];
    };
    run(TASK, $getResult);
}
