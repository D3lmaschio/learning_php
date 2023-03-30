<?php

$arr = [
    1 => 'one',
    2 => 'two',
    3 => 'three'
];

# Taking keys and values from an Array.
foreach($arr as $num => $numName) {
    echo "$num = $numName" . PHP_EOL;
}

echo 'Total: ' . count($arr) . PHP_EOL;