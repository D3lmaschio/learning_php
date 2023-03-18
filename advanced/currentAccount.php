<?php

$account1 = [
    'titular' => 'Matheus',
    'saldo' => 0
];

$account2 = [
    'titular' => 'Joan',
    'saldo' => 200
];

$account3 = [
    'titular' => 'Pedro',
    'saldo' => 20000
];

$accounts = [$account1, $account2, $account3];

for ($i=0; $i < count($accounts); ++$i) {
    echo 'Titular: ' . $accounts[$i]['titular'] . PHP_EOL;
    echo 'Saldo: ' . $accounts[$i]['saldo'] . PHP_EOL;
    echo PHP_EOL;
}