<?php

namespace BrainGames\Games\Gcd;

use function \BrainGames\Game\play;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const QUESTION_MIN_VALUE = 1;
const QUESTION_MAX_VALUE = 100;

function run()
{
    $getQuestionAndAnswer = function () {
        $firstNumber = rand(QUESTION_MIN_VALUE, QUESTION_MAX_VALUE);
        $secondNumber = rand(QUESTION_MIN_VALUE, QUESTION_MAX_VALUE);
        $question = "{$firstNumber} {$secondNumber}";
        $answer = gmp_strval(gmp_gcd($firstNumber, $secondNumber));
        return [$question, $answer];
    };
    play(DESCRIPTION, $getQuestionAndAnswer);
}
