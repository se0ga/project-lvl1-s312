<?php

namespace BrainGames\Games\Even;

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $description = 'Answer "yes" if number even otherwise answer "no".';
    $getQuestion = function () {
        return rand(0, 100);
    };
    $getRightAnswer = function ($question) {
        return isEven($question) ? 'yes' : 'no';
    };
    \BrainGames\Cli\runGame($description, $getQuestion, $getRightAnswer);
}
