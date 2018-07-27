<?php

namespace BrainGames\Games\Gcd;

use function \BrainGames\Game\play;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd($firstNumber, $secondNumber)
{
    return gmp_strval(gmp_gcd($firstNumber, $secondNumber));
}

function run()
{
    $getQuestionAndAnswer = function () {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $question = "{$firstNumber} {$secondNumber}";
        $answer = gcd($firstNumber, $secondNumber);
        return [$question, $answer];
    };
    play(DESCRIPTION, $getQuestionAndAnswer);
}
