<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function welcome($description = '')
{
    line('Welcome to the Brain Game!');
    if ($description !== '') {
        line($description);
    }
}

function askName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function run()
{
    welcome();
    askName();
}

function playBrainEven()
{
    welcome('Answer "yes" if number even otherwise answer "no".');
    $name = askName();
    
    $result = \BrainGames\games\even\run();

    if ($result) {
        line("Congratulations, %s!", $name);
    } else {
        line("Let's try again, %s!", $name);
    }
}

function playBrainCalc()
{
    welcome('What is the result of the expression?');
    $name = askName();

    $result = \BrainGames\games\calc\run();

    if ($result) {
        line("Congratulations, %s!", $name);
    } else {
        line("Let's try again, %s!", $name);
    }
}

function playBrainGcd()
{
    welcome('Find the greatest common divisor of given numbers.');
    $name = askName();

    $result = \BrainGames\games\gcd\run();

    if ($result) {
        line("Congratulations, %s!", $name);
    } else {
        line("Let's try again, %s!", $name);
    }
}
