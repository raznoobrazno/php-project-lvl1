<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function runGame()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".');
    print_r(PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    print_r(PHP_EOL);
    line('Question: 15');
    $question1 = prompt('Your answer');
    if ($question1 !== 'no') {
        line("'%s' is wrong answer ;(. Correct answer was 'no'.", $question1);
        line("Let's try again, %s!", $name);
        die();
    } else {
        line('Correct!');
    }
    line('Question: 6');
    $question2 = prompt('Your answer');
    if ($question2 !== 'yes') {
        line("'%s' is wrong answer ;(. Correct answer was 'yes'.", $question2);
        line("Let's try again, %s!", $name);
        die();
    } else {
        line('Correct!');
    }
    line('Question: 7');
    $question3 = prompt('Your answer');
    if ($question3 !== 'no') {
        line("'%s' is wrong answer ;(. Correct answer was 'no'.", $question3);
        line("Let's try again, %s!", $name);
        die();
    } else {
        line('Correct!');
        line("Congratulations, %s!", $name);
    }
}
