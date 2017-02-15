<center>
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

    echo "<div id='results'>You got $totalCorrect / 5 correct</div>";
    echo nl2br("\n<div>Cascading Style Sheets (CSS) is a simple mechanism for
     adding style (e.g., fonts, colors, spacing) to Web documents.
      These pages contain information on how to learn and use CSS
      and on available software. They also contain news from the CSS working group</div>");


?>
<br><object width="425" height="350" data="http://www.youtube.com/v/Ahg6qcgoay4" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/Ahg6qcgoay4" /></object>

</center>
<br>
<br>
