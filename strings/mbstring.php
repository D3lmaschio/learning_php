<?php

$frase = "PHP é massa demais meu parça!";

$captalized = mb_convert_case($frase, MB_CASE_LOWER, 'UTF-8');

echo $captalized . PHP_EOL;