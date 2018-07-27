<?php

namespace BrainGames\Games\Even;

use function \BrainGames\Game\play;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $getQuestionAndAnswer = function () {
        $number = rand(0, 100);
        $answer = isEven($number) ? 'yes' : 'no';
        $question = "{$number}";
        return [$question, $answer];
    };
    play(DESCRIPTION, $getQuestionAndAnswer);
}
