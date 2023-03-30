<?php

$age = 10;

echo "You can enter if you're 18 years and older" . PHP_EOL;

/*if ($age >= 18) {
    echo "You're $age years old, you can enter." . PHP_EOL;
} else {
    echo "You're $age years old, you cannot enter." . PHP_EOL;
}*/

# Ternary Operator
$message = $age >= 18 ? "You're $age, you can enter" : "You're $age, you cannot enter.";
echo $message . PHP_EOL;
