<?php

namespace BrainGames\games\gcd;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_TRIES = 3;

function gcd($firstNumber, $secondNumber)
{
    return gmp_strval(gmp_gcd($firstNumber, $secondNumber));
}
function run()
{
    for ($i = 0; $i < NUMBER_OF_TRIES; $i += 1) {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        line("Question: %s", "{$firstNumber} {$secondNumber}");
        $answer = prompt('Your answer: ');
        
        $rightAnswer = gcd($firstNumber, $secondNumber);
        if ($answer === $rightAnswer) {
            line("Correct!");
        } else {
            return false;
        }
    }
    return true;
}
