<?php

namespace BrainGames\Games\Balance;

function getBalance($question)
{
    $length = strlen($question);
    $sum = array_reduce(str_split($question), function ($acc, $number) {
        return $acc + (int) $number;
    }, 0);
    $basicNumber = floor($sum / $length);
    $arr = array_fill(0, $length, $basicNumber);
    for ($i = $length; $i > $length - $sum % $length; $i -= 1) {
        $arr[$i-1] += 1;
    }
    return implode('', $arr);
}

function run()
{
    $description = 'Balance the given number.';
    $getQuestion = function () {
        $number = rand(10, 10000);
        return "{$number}";
    };
    $getRightAnswer = function ($question) {
        return getBalance($question);
    };
    \BrainGames\Cli\runGame($description, $getQuestion, $getRightAnswer);
}
