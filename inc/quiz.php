<?php
/*
 * PHP Techdegree Project 2: Build a Quiz App in PHP
 *
 * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */

// Include questions

include("generate_questions.php");

$questions = generateQuestion();
$answers = array_slice($questions, 2); //get the answers inside the questions array

// Keep track of which questions have been asked

$totalQuestion = 10;

session_start();

//store the generated questions into the session array

if(!isset($_SESSION['counter'])){
    $_SESSION['counter'] = 0;
    $_SESSION['question'][$_SESSION['counter']] = $questions;
}else{
    $_SESSION['counter']++;
    $_SESSION['question'][$_SESSION['counter']] = $questions;
}


var_dump($_SESSION['question']);

if(isset($_POST['answer'])){
    $submitAnswer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
    
    $_SESSION['answer'][$_SESSION['counter']-1] = $submitAnswer;
    
    
    if($submitAnswer == $_SESSION['question'][$_SESSION['counter']-1]["correctAnswer"]){
        $_SESSION['answer']['result'] = 'correct';
    }else{
        $_SESSION['answer']['result'] = 'incorrect';
    }
    
    var_dump($_SESSION['answer']);
    
}


//shuffle answer buttons
function shuffle_answers($answers){
    shuffle($answers);
    return $answers;
}


//stored answeres into sessions which keep tracking on questions



// Show which question they are on
// Show random question
// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score