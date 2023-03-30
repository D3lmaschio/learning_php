<?php

$text = '.Legal cara.';

#result = trim($text, '.');
$result = ltrim($text, '.');
$result2 = rtrim($text, '.');

echo $result . PHP_EOL;
echo $result2 . PHP_EOL;
