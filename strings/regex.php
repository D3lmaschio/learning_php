<?php

$telefones = ['(11) 1111-1111', '(22) 2222-2222', '(33) 83333-3333'];

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4})$/';
    $valid = preg_match(
        $regex,
        $telefone,
        $matches
    );
    #var_dump($matches);
    if($valid) {
        echo "Telefone: $telefone é válido" . PHP_EOL;
    } else {
        echo "Telefone: $telefone não é válido." . PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone) . PHP_EOL;
}