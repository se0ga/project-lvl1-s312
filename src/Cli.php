<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_TRIES = 3;

const GAMES = [
    'even' => [
        'description' => 'Answer "yes" if number even otherwise answer "no".',
        'run' => '\BrainGames\games\even\run'
    ],
    'calc' => [
        'description' => 'What is the result of the expression?',
        'run' => '\BrainGames\games\calc\run'
    ],
    'gcd' => [
        'description' => 'Find the greatest common divisor of given numbers.',
        'run' => '\BrainGames\games\gcd\run'
    ]
];

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

function runGame($gameName)
{
    $game = GAMES[$gameName];
    welcome($game['description']);
    $name = askName();
    
    for ($i = 0; $i < NUMBER_OF_TRIES; $i += 1) {
        [$question, $rightAnswer] = $game['run']();
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
