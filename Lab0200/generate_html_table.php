<?php

if ($argc < 2) {
    echo 'Please specify the number of rows as a command line argument.' . PHP_EOL;
    exit();
}

$num_rows = intval($argv[1]);

if ($num_rows <= 0) {
    echo 'The number of rows must be a positive integer.' . PHP_EOL;
    exit();
}

echo '<table>';
for ($i = 1; $i <= $num_rows; $i++) {
    echo '<tr><td>' . $i . '</td></tr>';
}
echo '</table>';

?>