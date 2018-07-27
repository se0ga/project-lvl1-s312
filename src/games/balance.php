<?php

namespace BrainGames\Games\Balance;

function getBalance($number)
{
    $string = (string) $number;
    $length = strlen($string);
    $sum = array_reduce(str_split($string), function ($acc, $number) {
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
    $getQuestionAndAnswer = function () {
        $question = rand(10, 10000);
        $answer = getBalance($question);
        return [$question, $answer];
    };
    \BrainGames\Cli\runGame($description, $getQuestionAndAnswer);
}
