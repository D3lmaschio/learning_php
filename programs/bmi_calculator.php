<?php

echo 'BMI calculator' . PHP_EOL;

$weight = 72;
$height = 1.71;

$bmi= 72 / 1.71 ** 2;

$message = match (true) {
    $bmi < 18.5 => 'Underweight',
    $bmi >= 18.5 && $bmi < 25 => 'Normal',
    $bmi >= 25 && $bmi < 30 => 'Overweight',
    $bmi >= 30 && $bmi < 40 => 'Obese',
    $bmi >= 40 => 'Severely obese'
};

$format = "Your BMI is: %.2f, which means that your BMI is $message." . PHP_EOL;

printf($format, $bmi);