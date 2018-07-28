<?php

namespace BrainGames\Games\Even;

use function \BrainGames\Game\play;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';
const QUESTION_MIN_VALUE = 0;
const QUESTION_MAX_VALUE = 100;

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $getQuestionAndAnswer = function () {
        $number = rand(QUESTION_MIN_VALUE, QUESTION_MAX_VALUE);
        $answer = isEven($number) ? 'yes' : 'no';
        $question = "{$number}";
        return [$question, $answer];
    };
    play(DESCRIPTION, $getQuestionAndAnswer);
}
