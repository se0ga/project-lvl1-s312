<?php

namespace BrainGames\Games\Balance;

use function \BrainGames\Game\play;

const DESCRIPTION = 'Balance the given number.';

function getBalance(int $number)
{
    $string = (string) $number;
    $length = strlen($string);
    $sum = array_reduce(str_split($string), function ($acc, $number) {
        return $acc + (int) $number;
    }, 0);
    $basicNumber = floor($sum / $length);
    $arr = array_fill(0, $length, $basicNumber);
    $remainder = $sum % $length;
    for ($i = 0; $i < $remainder; $i += 1) {
        $index = $length - $i - 1;
        $arr[$index] += 1;
    }
    return implode('', $arr);
}

function run()
{
    $getQuestionAndAnswer = function () {
        $number = rand(10, 10000);
        $answer = getBalance($number);
        $question = "{$number}";
        return [$question, $answer];
    };
    play(DESCRIPTION, $getQuestionAndAnswer);
}
