<?php

namespace BrainGames\Games\Gcd;

function gcd($firstNumber, $secondNumber)
{
    return gmp_strval(gmp_gcd($firstNumber, $secondNumber));
}

function run()
{
    $description = 'Find the greatest common divisor of given numbers.';
    $getQuestion = function () {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        return "{$firstNumber} {$secondNumber}";
    };
    $getRightAnswer = function ($question) {
        $arr = explode(' ', $question);
        return gcd((int) $arr[0], (int) $arr[1]);
    };
    \BrainGames\Cli\runGame($description, $getQuestion, $getRightAnswer);
}
