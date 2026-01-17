<?php

echo "Welcome to screen match!
";

$nameMovie = "Top Gun - Maverick";
$releaseMovie = $argv[1];

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

switch ($releaseMovie) {
    case $releaseMovie > 2022:
        echo "It is a new movie!";
        break;
    case $releaseMovie > 2020 && $releaseMovie <=2022:
        echo "This still is a new movie!";
        break;
    default:
        echo "It is a old movie";
}

$resultado = $expressao1 ? $expressao2 : $expressao3;