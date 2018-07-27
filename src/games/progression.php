<?php

namespace BrainGames\Games\Progression;

use function \BrainGames\Game\play;

const DESCRIPTION = 'What number is missing in this progression?';
const PROGRESSION_LENGTH = 10;
const PROGRESSION_MIN_NUMBER = 1;
const PROGRESSION_MAX_NUMBER = 100;
const PROGRESSION_MIN_STEP = 1;
const PROGRESSION_MAX_STEP = 10;

function getProgressionArray()
{
    $start = rand(PROGRESSION_MIN_NUMBER, PROGRESSION_MAX_NUMBER);
    $step = rand(PROGRESSION_MIN_STEP, PROGRESSION_MAX_STEP);
    for ($i = 1; $i <= PROGRESSION_LENGTH; $i += 1) {
        $result[] = $start + $i * $step;
    }
    return $result;
}

function run()
{
    $getQuestionAndAnswer = function () {
        $progression = getProgressionArray();
        $index = rand(0, PROGRESSION_LENGTH - 1);
        $answer = "{$progression[$index]}";
        $progression[$index] = '..';
        $question = implode(' ', $progression);
        return [$question, $answer];
    };
    play(DESCRIPTION, $getQuestionAndAnswer);
}
