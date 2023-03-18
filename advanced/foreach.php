<?php

$accounts = [
    '44973929883' => [
        'titular' => 'Matheus',
        'saldo' => 0
    ],

    '44973929853' => [
        'titular' => 'Joan',
        'saldo' => 200
    ],

    '44973929483' => [
        'titular' => 'Pedro',
        'saldo' => 20000
    ]
];

foreach($accounts as $cpf => $account) {
    echo 'Titular: ' . $account['titular'] . PHP_EOL;
    echo 'CPF: ' . $cpf . PHP_EOL;
    echo 'Saldo: ' . $account['saldo'] . PHP_EOL;
}