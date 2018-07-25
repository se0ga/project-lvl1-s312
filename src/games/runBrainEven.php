<?php

namespace BrainGames\games\even;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_TRIES = 3;

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    for ($i = 0; $i < NUMBER_OF_TRIES; $i += 1) {
        $randomNumber = rand(0, 100);
        line("Question: %s", $randomNumber);
        $answer = prompt('Your answer: ');
        
        $rightAnswer = isEven($randomNumber) ? 'yes' : 'no';
        if ($answer === $rightAnswer) {
            line("Correct!");
        } else {
            return false;
        }
    }
    return true;
}
