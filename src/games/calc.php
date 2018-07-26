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
    $getQuestion = function () {
        $firstNumber = rand(0, 100);
        $secondNumber = rand(0, 100);
        $operation = OPERATIONS[rand(0, 2)];
        return "{$firstNumber} {$operation} {$secondNumber}";
    };
    $getRightAnswer = function ($question) {
        $arr = explode(' ', $question);
        return calculate((int) $arr[0], (int) $arr[2], $arr[1]);
    };
    \BrainGames\Cli\runGame($description, $getQuestion, $getRightAnswer);
}
