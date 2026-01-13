<?php
## Exercise 02 - Write a PHP program that calculates the average of three grades and displays the result.
$a = 85.8;
$b = 56.7;
$c = 70;

$sumScore = $a;
$sumScore += $b;
$sumScore += $c;

$averageScore = $sumScore /3;

echo "The average score is:" . $averageScore;