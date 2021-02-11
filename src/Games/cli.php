<?php
namespace Php\Project\Lvl1\Games\cli;

use function cli\line;
use function cli\prompt;



function hello()
{
    line("Welcome to the Brain Games!");
    $userName = prompt('May I have your name', $default = false, "? ");
    line("Hello, %s!", $userName);

}
