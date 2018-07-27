<?php

namespace BrainGames\Games\Progression;

function getProgressionArray($number)
{
    $start = rand(1, 100);
    $step = rand(1, 10);
    for ($i = 0; $i < $number; $i += 1) {
        $result[] = $start + ($i + 1) * $step;
    }
    return $result;
}

function run()
{
    $description = 'What number is missing in this progression?';
    $getQuestionAndAnswer = function () {
        $questionArray = getProgressionArray(10);
        $index = rand(0, 9);
        $answer = $questionArray[$index];
        $questionArray[$index] = '..';
        $question = implode(' ', $questionArray);
        return [$question, $answer];
    };
    \BrainGames\Cli\runGame($description, $getQuestionAndAnswer);
}
