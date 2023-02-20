<?php

$longest_words = array();
$max_length = 0;

foreach ($argv as $arg) {
    if (strlen($arg) > $max_length) {
        $longest_words = array($arg);
        $max_length = strlen($arg);
    } elseif (strlen($arg) == $max_length) {
        $longest_words[] = $arg;
    }
}

if (count($longest_words) == 1) {
    echo 'The longest word is: ' . $longest_words[0] . PHP_EOL;
} elseif (count($longest_words) > 1) {
    echo 'The longest words are: ' . implode(', ', $longest_words) . PHP_EOL;
} else {
    echo 'No words were provided.' . PHP_EOL;
}

?>