<?php

//create a question array and push the generated question into the array
function generateQuestion(){
    $rangeLow = 1;
    $rangeHigh = 100;
    $incorrectNumberHigh = 10;

    $leftAdder = random_int($rangeLow, $rangeHigh);
    $rightAdder = random_int($rangeLow, $rangeHigh);
    $correctAnswer = $leftAdder + $rightAdder;
    //generate init values for envaluation
    $incorrectAnswerFirst = random_int($correctAnswer-$incorrectNumberHigh, $correctAnswer+$incorrectNumberHigh);
    $incorrectAnswerSecond = random_int($correctAnswer-$incorrectNumberHigh , $correctAnswer+$incorrectNumberHigh);

    //if the condition not met, keep generated
    while(
        ($incorrectAnswerFirst == $correctAnswer) 
        ||  
        ($incorrectAnswerFirst == $incorrectAnswerSecond)
        ||
        ($incorrectAnswerSecond == $correctAnswer)
    ){
        $incorrectAnswerFirst = random_int($correctAnswer-$incorrectNumberHigh, $correctAnswer+$incorrectNumberHigh);
        $incorrectAnswerSecond = random_int($correctAnswer-$incorrectNumberHigh , $correctAnswer+$incorrectNumberHigh);
    }
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