<?php

$grades = [
    0 => null,
    'dois',
    2 => 'três',
];

asort($grades);

if (in_array('três', $grades)) {
    echo "Existe o valor \"três\" existe neste Array.";
}
