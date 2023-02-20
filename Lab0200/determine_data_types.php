<?php

foreach ($argv as $arg) {
    if (is_numeric($arg)) {
        if (strpos($arg, '.') !== false) {
            echo $arg . ' is a floating point number.' . PHP_EOL;
        } else {
            echo $arg . ' is an integer.' . PHP_EOL;
        }
    } else {
        echo $arg . ' is a string.' . PHP_EOL;
    }
}

?>