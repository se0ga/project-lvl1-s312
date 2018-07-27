<?php

namespace BrainGames\Games\Gcd;

function gcd($firstNumber, $secondNumber)
{
    return gmp_strval(gmp_gcd($firstNumber, $secondNumber));
}

function run()
{
    $description = 'Find the greatest common divisor of given numbers.';
    $getQuestionAndAnswer = function () {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $question = "{$firstNumber} {$secondNumber}";
        $answer = gcd($firstNumber, $secondNumber);
        return [$question, $answer];
    };
    \BrainGames\Cli\runGame($description, $getQuestionAndAnswer);
}
