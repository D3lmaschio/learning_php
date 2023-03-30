<?php

$pointer = fopen('file-to-read.txt', 'r');

while (!feof($pointer)) {
    $txt = fgets($pointer);

    echo $txt;
}

fclose($pointer);