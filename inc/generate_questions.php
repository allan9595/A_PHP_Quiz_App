<?php

//create a question array and push the generated question into the array
function generateQuestion(){
    $rangeLow = 1;
    $rangeHigh = 100;
    $incorrectNumberLow = 1;
    $incorrectNumberHigh = 10;

    $leftAdder = random_int($rangeLow, $rangeHigh);
    $rightAdder = random_int($rangeLow, $rangeHigh);
    $correctAnswer = $leftAdder + $rightAdder;
    $incorrectAnswerFirst = $correctAnswer + random_int($incorrectNumberLow, $incorrectNumberHigh);
    $incorrectAnswerSecond = $correctAnswer - random_int($incorrectNumberLow , $incorrectNumberHigh);
    $questions =
        [
            "leftAdder" => $leftAdder,
            "rightAdder" => $rightAdder,
            "correctAnswer" => $correctAnswer,
            "firstIncorrectAnswer" => $incorrectAnswerFirst,
            "secondIncorrectAnswer" => $incorrectAnswerSecond
        ];


    return $questions;
}

?>