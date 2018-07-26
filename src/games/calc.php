<?php

namespace BrainGames\games\calc;

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
    $firstNumber = rand(0, 100);
    $secondNumber = rand(0, 100);
    $operation = OPERATIONS[rand(0, 2)];
    
    $question = "{$firstNumber} {$operation} {$secondNumber}";
    $rightAnswer = calculate($firstNumber, $secondNumber, $operation);
    return [$question, $rightAnswer];
}
