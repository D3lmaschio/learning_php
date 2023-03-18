<?php

$list = [1, 2, 3, 4, 5];
$count = 0;

foreach ($list as $index => $value) {
    echo "Index: $index" . PHP_EOL;
    echo "Valor: $value " . PHP_EOL;
    echo "Contagem:" . ++$count . PHP_EOL;
    echo PHP_EOL;
}