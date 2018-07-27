<?php

namespace BrainGames\Games\Calc;

use function \BrainGames\Game\play;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];

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
        $firstNumber = rand(0, 100);
        $secondNumber = rand(0, 100);
        $operation = OPERATIONS[rand(0, 2)];
        $question = "{$firstNumber} {$operation} {$secondNumber}";
        $result = calculate($firstNumber, $secondNumber, $operation);
        $answer = "{$result}";
        return [$question, $answer];
    };
    play(DESCRIPTION, $getQuestionAndAnswer);
}
