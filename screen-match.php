<?php

echo "Welcome to screen match!
";

$nameMovie = "Top Gun - Maverick";
$releaseMovie = 2022;

$sumScore = 9;
$sumScore += 6;
$sumScore += 7.5;
$sumScore += 9;
$sumScore += 8;

$scoreMovie = $sumScore / 5;
$primePlan = true;

$includedPackge = $primePlan || $releaseMovie <2020;

echo "Name of the movie: " . $nameMovie . "\n";
echo "Score movie: $scoreMovie\n";
