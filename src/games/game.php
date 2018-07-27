<?php

namespace BrainGames\Game;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_TRIES = 3;

function askName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function play($description, $getQuestionAndAnswer)
{
    line('Welcome to the Brain Game!');
    line($description);
    $name = askName();
    for ($i = 0; $i < NUMBER_OF_TRIES; $i += 1) {
        [$question, $rightAnswer] = $getQuestionAndAnswer();
        line("Question: %s", $question);
        $answer = prompt('Your answer: ');
        
        if ($answer === $rightAnswer) {
            line("Correct!");
        } else {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
