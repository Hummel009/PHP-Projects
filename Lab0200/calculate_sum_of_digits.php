<?php

if ($argc < 2) {
    echo 'Please specify a number as a command line argument.' . PHP_EOL;
    exit();
}

$number = $argv[1];
$sum = 0;

for ($i = 0; $i < strlen($number); $i++) {
    $sum += intval($number[$i]);
}

echo 'The sum of the digits in ' . $number . ' is ' . $sum . '.' . PHP_EOL;

?>