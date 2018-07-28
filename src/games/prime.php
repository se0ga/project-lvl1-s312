<?php

namespace BrainGames\Games\Prime;

use function \BrainGames\Game\play;

const DESCRIPTION = 'Answer "yes" if number is prime number otherwise answer "no".';
const QUESTION_MIN_VALUE = 2;
const QUESTION_MAX_VALUE = 1000;

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function run()
{
    $getQuestionAndAnswer = function () {
        $number = rand(QUESTION_MIN_VALUE, QUESTION_MAX_VALUE);
        $answer = isPrime($number) ? 'yes' : 'no';
        $question = "{$number}";
        return [$question, $answer];
    };
    play(DESCRIPTION, $getQuestionAndAnswer);
}
