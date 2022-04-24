<?php
echo '
<head>
    <title>The hardest quiz solution</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
<div class="center"><div class="innercenter">';
$rain = $_POST["wasrain"];
$answer = $_POST["cntanws"];
$pet =$_POST["cutepet"];
$sky =$_POST["sky"];
$name = $_POST["name"];
//answers:
$ans_rain = "I don't know";
$ans_answer = "One";
$ans_pet ="Rabbit";
$ans_sky ="Green"; // yes, green
$ans_name = "Nhat";
//grade
$grade = 0;
if($rain == $ans_rain) $grade += 20;
if($answer == $ans_answer) $grade += 20;
if($pet == $ans_pet) $grade += 20;
if($sky == $ans_sky) $grade += 20;
if($name == $ans_name) $grade += 20;
echo "<br><center><div class='gradebox'>Your grade is: $grade/100</div></center>";
echo "<br><p>Question 1: Did it rain yesterday?</p>";
echo "<p>&emsp;&emsp;&emsp;Your answer: $rain </p>";
echo "<p>&emsp;&emsp;&emsp;Correct answer: $ans_rain </p>";

echo "<br><p>Question 2: How many answer for this question?</p>";
echo "<p>&emsp;&emsp;&emsp;Your answer: $answer </p>";
echo "<p>&emsp;&emsp;&emsp;Correct answer: $ans_answer </p>";

echo "<br><p>Question 3: What's the cutest pet to have</p>";
echo "<p>&emsp;&emsp;&emsp;Your answer: $pet </p>";
echo "<p>&emsp;&emsp;&emsp;Correct answer: $ans_pet </p>";

echo "<br><p>Question 4: What's the color of the sky?</p>";
echo "<p>&emsp;&emsp;&emsp;Your answer: $sky </p>";
echo "<p>&emsp;&emsp;&emsp;Correct answer: $ans_sky </p>";

echo "<br><p>Question 5: Who am I?</p>";
echo "<p>&emsp;&emsp;&emsp;Your answer: $name </p>";
echo "<p>&emsp;&emsp;&emsp;Correct answer: $ans_name </p>";

echo '</div></div></body>';
?>