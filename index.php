<?php 
    include("inc/quiz.php");
    $shuffledAnswers = shuffle_answers($answers);//shuffle the answers so make it random
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css?version=51">
    <link rel="stylesheet" href="css/animate.min.css?version=51">
    <link rel="stylesheet" href="css/styles.css?version=51">
</head>
<body>
    <div class="container">
        <div id="quiz-box">
            <?php
                if(isset($_SESSION['answer'][$_SESSION['counter']-1]['result'])){
                    echo "<p class='animated slideOutUp delay-2s'>You got the last question " . $_SESSION['answer'][$_SESSION['counter']-1]['result'] . "</p>";
                }

                if(($_SESSION['counter']+1) > 10){
                    $count = 0;
                    //count the total correct if the answer session exist
                    if(isset($_SESSION['answer'])){
                        foreach(($_SESSION['answer']) as $keys){
                            if($keys['result'] == "correct"){
                                $count ++;
                            }
                        }
                    }
                    echo "<p class='total'>Your total score is " . ($count) . "</p>";   
                    session_destroy();
                    echo "<form action='index.php' method='post'>";
                    echo "<input type='submit' class='btn' name='restart' value='Restart' />";
                    echo "</form>";
                }
                else{
                    echo "<p class='breadcrumbs'>Question " .  ($_SESSION['counter']+1) .  " of $totalQuestion</p>";
                    echo "<p class='quiz'>What is " . $questions['leftAdder'] . "+" . $questions['rightAdder'] ."?</p>";
                    echo "<form action='index.php' method='post'>";
                    echo "<input type='hidden' name='id' value='0' />";
                    echo "<input type='submit' class='btn' name='answer' value=$shuffledAnswers[0] />";
                    echo "<input type='submit' class='btn' name='answer' value=$shuffledAnswers[1] />";
                    echo "<input type='submit' class='btn' name='answer' value=$shuffledAnswers[2] />";
                    echo "</form>";
                }
            ?>
        </div>
    </div>
</body>
</html>