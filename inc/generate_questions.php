<?php
// Generate random questions

// Loop for required number of questions

// Get random numbers to add

// Calculate correct answer

// Get incorrect answers within 10 numbers either way of correct answer
// Make sure it is a unique answer

// Add question and answer to questions array

//create a question array and push the generated question into the array
$questions = [];
$rangeLow = 1;
$rangeHigh = 1000;
$incorrectNumberLow = 1;
$incorrectNumberHigh = 10;

for($i=0;i<=20;++$i){
    $leftAdder = random_int($rangeLow, $rangeHigh);
    $rightAdder = random_int($rangeLow, $rangeHigh);
    $correctAnswer = $leftAdder + $rightAdder;
    $incorrectAnswerFirst = random_int($incorrectNumberLow, $incorrectNumberHigh);
    $incorrectAnswerSecond = random_int($incorrectAnswerFirst, $incorrectNumberHigh);

   
}