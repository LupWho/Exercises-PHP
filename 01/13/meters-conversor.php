<?php

## Exercise 03 - Write a PHP program that receives a value in meters and converts it to centimeters.

$meters = $argv[1] ?? 0;
$centimeters = $meters * 100;

echo "You has:" . $centimeters  . " centimeters";
