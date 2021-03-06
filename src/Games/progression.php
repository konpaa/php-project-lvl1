<?php

namespace Php\Project\Lvl1\Games\progression;

use function Php\Project\Lvl1\general\run;

const TASK = 'What number is missing in the progression?';

const PROGRESSION_LENGTH = 10;

function progression(int $init, int $step): array
{
    $progression = [];
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        // initial element
        $progression[] = $init;
        // next element
        $init += $step;
    }
    return $progression;
}

function play(): void
{
    $getResult = function (): array {
        $init = rand(1, 10);
        $step = rand(1, 10);
        $result = progression($init, $step);
        $idxToFind = array_rand($result);
        $question = $result;
        $question[$idxToFind] = "..";
        $question = implode(' ', $question);
        return [$question, $result[$idxToFind]];
    };
    run(TASK, $getResult);
}
