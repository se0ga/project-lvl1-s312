<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_TRIES = 3;

function welcome($description = '')
{
    line('Welcome to the Brain Game!');
    if ($description !== '') {
        line($description);
    }
}

function askName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function run()
{
    welcome();
    askName();
}

function runGame($description, $getQuestion, $getRightAnswer)
{
    welcome($description);
    $name = askName();
    for ($i = 0; $i < NUMBER_OF_TRIES; $i += 1) {
        $question = $getQuestion();
        $rightAnswer = $getRightAnswer($question);
        line("Question: %s", "{$question}");
        $answer = prompt('Your answer: ');
        
        if ($answer === (string) $rightAnswer) {
            line("Correct!");
        } else {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
