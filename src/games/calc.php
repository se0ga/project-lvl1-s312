<?php

namespace BrainGames\Games\Calc;

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
    $description = 'What is the result of the expression?';
    $getQuestionAndAnswer = function () {
        $firstNumber = rand(0, 100);
        $secondNumber = rand(0, 100);
        $operation = OPERATIONS[rand(0, 2)];
        $question = "{$firstNumber} {$operation} {$secondNumber}";
        $answer = calculate($firstNumber, $secondNumber, $operation);
        return [$question, $answer];
    };
    \BrainGames\Cli\runGame($description, $getQuestionAndAnswer);
}
