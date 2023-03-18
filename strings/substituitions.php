<?php
# Single replaces
$texto = "Eu quero bolacha.";
$texto = str_replace('bolacha', 'café', $texto);
echo $texto . PHP_EOL;
echo strtr($texto, ['café' => 'bolacha']) . PHP_EOL;

# Multiple replaces
$new_text = 'Eu quero bolacha e suco';
$new_text = str_replace(['bolacha', 'suco'], ['batata', 'café'], $new_text);
echo $new_text . PHP_EOL;
echo strtr($new_text, ['batata' => 'bolacha', 'café' => 'suco']) . PHP_EOL;

# strtr difference:
$string = "hi all, I said hello";
echo str_replace(['hi', 'hello'], ['hello', 'hi'], $string) . PHP_EOL;
echo strtr($string, ['hi' => 'hello', 'hello' => 'hi']) . PHP_EOL;