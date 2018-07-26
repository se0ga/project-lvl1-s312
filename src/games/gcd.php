<?php

namespace BrainGames\games\gcd;

function gcd($firstNumber, $secondNumber)
{
    return gmp_strval(gmp_gcd($firstNumber, $secondNumber));
}

function run()
{
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
    $question = "{$firstNumber} {$secondNumber}";
    $rightAnswer = gcd($firstNumber, $secondNumber);
    return [$question, $rightAnswer];
}
