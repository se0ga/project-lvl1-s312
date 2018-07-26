<?php

namespace BrainGames\games\even;

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $question = rand(0, 100);
    $rightAnswer = isEven($question) ? 'yes' : 'no';
    return [$question, $rightAnswer];
}
