<?php

function display_array_recursive($array, $depth) {
    foreach ($array as $key => $value) {
        echo '<span style="color: ' . get_color_for_depth($depth) . '">';
        if (is_array($value)) {
            echo $key . ' => ' . PHP_EOL;
            display_array_recursive($value, $depth + 1);
        } else {
            echo $key . ' => ' . $value . PHP_EOL;
        }
        echo '</span>';
    }
}

function get_color_for_depth($depth) {
    $colors = array('red', 'blue', 'green', 'purple', 'yellow');
    return isset($colors[$depth - 1]) ? $colors[$depth - 1] : 'black';
}

$array = array(
    'fruit' => array(
        'apple' => array(
            'green',
            'red'
        ),
        'banana' => 'yellow'
    ),
    'vegetable' => array(
        'carrot' => array(
            'orange',
            'purple'
        ),
        'spinach' => 'green'
    )
);

display_array_recursive($array, 1);

?>