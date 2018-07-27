<?php

namespace BrainGames\Games\Even;

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $description = 'Answer "yes" if number even otherwise answer "no".';
    $getQuestionAndAnswer = function () {
        $question = rand(0, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
    \BrainGames\Cli\runGame($description, $getQuestionAndAnswer);
}
