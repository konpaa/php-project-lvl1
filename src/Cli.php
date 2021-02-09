<?php

use function cli\line;
use function cli\prompt;

function greting()
{
	line('Welcome to the Brain Game!');
	$name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}



function even($name)
{
	line('Answer "yes" if the number is even, otherwise answer "no".');
	$isTru = true;
	$count = 0;
	$correct = 0;
	do {
		$correct = rand(1,30);
		$number = prompt("Question {$correct}");
		if ($correct % 2 == 0) {
			if ($number === 'yes') {
				$count++;
				line("Correct!");
			}else {
				line("'no' is wrong answer ;(. Correct answer was 'yes'.\n");
				line("Let's try again, {$name}");
				break;
			}
		}else if($correct % 2 !== 0){
			
			if ($number === 'no') {
				$count++;
				line("Correct!");
			}else{
				line("'yes' is wrong answer ;(. Correct answer was 'no'.\n");
				line("Let's try again, {$name}");
				break;
			}
		}

		if ($count === 3 ) {
			$isTru = false;
		}


	}while($isTru);
	

	if ($count === 3) {
		line("Congratulations,  {$name}");
	}
    
}
