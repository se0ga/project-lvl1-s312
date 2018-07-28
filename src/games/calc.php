<?php

namespace BrainGames\Games\Calc;

use function \BrainGames\Game\play;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];
const QUESTION_MIN_VALUE = 0;
const QUESTION_MAX_VALUE = 100;

function calculate($firstNumber, $secondNumber, $operation)
{
    switch ($operation) {
        case '+':
            return $firstNumber + $secondNumber;
        case '-':
            return $firstNumber - $secondNumber;
        case '*':
            return $firstNumber * $secondNumber;
    }
}

function run()
{
    $getQuestionAndAnswer = function () {
        $firstNumber = rand(QUESTION_MIN_VALUE, QUESTION_MAX_VALUE);
        $secondNumber = rand(QUESTION_MIN_VALUE, QUESTION_MAX_VALUE);
        $index = rand(0, sizeof(OPERATIONS) - 1);
        $operation = OPERATIONS[$index];
        $question = "{$firstNumber} {$operation} {$secondNumber}";
        $result = calculate($firstNumber, $secondNumber, $operation);
        $answer = "{$result}";
        return [$question, $answer];
    };
    play(DESCRIPTION, $getQuestionAndAnswer);
}
