<?php

$nome = 'Matheus Rubens';
$email = 'eae@email.com.br';
$password = 'áéíóú';

if (mb_strlen($password) < 8) {
    echo "Your password is insecure." . PHP_EOL;
}

echo strstr($email, '@', true) . PHP_EOL; // Extracts the domain

$user = strstr($email, '@'); // Extracts the mail name
$domain = strstr($email, '@', true); // Extracts the domain

[$first_name, $second_name] = explode(' ', $nome);

echo "Seu nome é: $first_name \nSeu sobrenome é: $second_name" . PHP_EOL;



