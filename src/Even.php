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
    $number1 = rand (1,99);
    line('Question: %s', $number1);
    $question1 = prompt('Your answer');
    if ($number1 % 2 === 0) {
        switch ($question1) {
            case 'yes':
                line('Correct!');
                break;
            case 'no':
                line("'%s' is wrong answer ;(. Correct answer was 'yes'.", $question1);
                line("Let's try again, %s!", $name);
                die();
        }
    } else {
        switch ($question1) {
            case 'no':
                line('Correct!');
                break;
            case 'yes':
                line("'%s' is wrong answer ;(. Correct answer was 'no'.", $question1);
                line("Let's try again, %s!", $name);
                die();
        }
    }
    $number2 = rand (1,99);
    line('Question: %s', $number2);
    $question2 = prompt('Your answer');
    if ($number2 % 2 === 0) {
        switch ($question2) {
            case 'yes':
                line('Correct!');
                break;
            case 'no':
                line("'%s' is wrong answer ;(. Correct answer was 'yes'.", $question2);
                line("Let's try again, %s!", $name);
                die();
        }
    } else {
        switch ($question2) {
            case 'no':
                line('Correct!');
                break;
            case 'yes':
                line("'%s' is wrong answer ;(. Correct answer was 'no'.", $question2);
                line("Let's try again, %s!", $name);
                die();
        }
    }
    $number3 = rand (1,99);
    line('Question: %s', $number3);
    $question3 = prompt('Your answer');
    if ($number3 % 2 === 0) {
        switch ($question3) {
            case 'yes':
                line('Correct!');
                line('Congratulations, %s!', $name);
                break;
            case 'no':
                line("'%s' is wrong answer ;(. Correct answer was 'yes'.", $question3);
                line("Let's try again, %s!", $name);
                die();
        }
    } else {
        switch ($question3) {
            case 'no':
                line('Correct!');
                line('Congratulations, %s!', $name);
                break;
            case 'yes':
                line("'%s' is wrong answer ;(. Correct answer was 'no'.", $question3);
                line("Let's try again, %s!", $name);
                die();
        }
    }
}
