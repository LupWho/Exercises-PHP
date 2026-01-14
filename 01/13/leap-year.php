<?php
## Exercise 04 - Develop a PHP program that checks whether a year is a leap year or not.

$year = $argv[1];

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "$year is a leap year";
} else {
    echo "$year is not a leap year";
}
