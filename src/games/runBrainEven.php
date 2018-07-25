<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_TRIES = 3;

function isEven($number)
{
    return $number % 2 === 0;
}

function runBrainEven()
{
    for ($i = 0; $i < NUMBER_OF_TRIES; $i += 1) {
        $randomNumber = rand(0, 100);
        line("Question: %s", $randomNumber);
        $answer = prompt('Your answer: ');
        if ($answer === 'yes' && isEven($randomNumber) || $answer === 'no' && !isEven($randomNumber)) {
            line("Correct!");
        } else {
            return false;
        }
    }
    return true;
}
