<?php

    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    $totalCorrect = 0;

    if ($answer1 == "Cascading Style Sheets") { $totalCorrect++; }
    if ($answer2 == "2001") { $totalCorrect++; }
    if ($answer3 == "Search Engine Optimization") { $totalCorrect++; }
    if ($answer4 == "Hypertext Markup Language") { $totalCorrect++; }
    if ($answer5 == "Hello") { $totalCorrect++; }

    echo "<div id='results'>$totalCorrect / 5 correct</div>";

?>
