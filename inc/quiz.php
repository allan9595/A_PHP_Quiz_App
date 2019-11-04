<?php

// Include questions
include("generate_questions.php");

$questions = generateQuestion();
$answers = array_slice($questions, 2); //get the answers inside the questions array


$totalQuestion = 10;

session_start();

//store the generated questions and answers into the session array
// Keep track of which questions have been asked
if(!isset($_SESSION['counter'])){
    $_SESSION['counter'] = 0;
    $_SESSION['question'][$_SESSION['counter']] = $questions;
}else{
    $_SESSION['counter']++;
    $_SESSION['question'][$_SESSION['counter']] = $questions;
}

if(isset($_POST['answer'])){
    $submitAnswer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
    if(isset($submitAnswer)){
        if($submitAnswer == $_SESSION['question'][$_SESSION['counter']-1]["correctAnswer"]){
            $_SESSION['answer'][$_SESSION['counter']-1]['result'] = 'correct';
        }else{
            $_SESSION['answer'][$_SESSION['counter']-1]['result'] = 'incorrect';
        }
    }
}

//shuffle answer buttons
function shuffle_answers($answers){
    shuffle($answers);
    return $answers;
}

?>