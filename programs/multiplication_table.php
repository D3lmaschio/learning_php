<?php

echo 'Multiplication table program' . PHP_EOL;

$multiplier = 2;
for ($i=1; $i <= 10; ++$i) {
    $result = $multiplier * $i;
    echo "$multiplier x $i = $result" . PHP_EOL;
}