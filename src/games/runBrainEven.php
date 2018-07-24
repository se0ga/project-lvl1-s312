<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function runBrainEven()
{
    for ($i = 0; $i < 3; $i += 1) {
        $randomNumber = rand(0, 100);
        $isEven = $randomNumber % 2 === 0;
        line("Question: %s", $randomNumber);
        $answer = prompt('Your answer: ');
        if ($answer === 'yes' && $isEven || $answer === 'no' && !$isEven) {
            line("Correct!");
        } else {
            return false;
        }
    }
    return true;
}
