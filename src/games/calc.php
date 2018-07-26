<?php

namespace BrainGames\games\calc;

use function \cli\line;
use function \cli\prompt;

const OPERATIONS = ['+', '-', '*'];
const NUMBER_OF_TRIES = 3;

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
    for ($i = 0; $i < NUMBER_OF_TRIES; $i += 1) {
        $firstNumber = rand(0, 100);
        $secondNumber = rand(0, 100);
        $operation = OPERATIONS[rand(0, 2)];
        
        line("Question: %s", "{$firstNumber} {$operation} {$secondNumber}");
        $answer = prompt('Your answer: ');
        $rightAnswer = calculate($firstNumber, $secondNumber, $operation);

        if ((int) $answer === $rightAnswer) {
            line("Correct!");
        } else {
            return false;
        }
    }
    return true;
}
