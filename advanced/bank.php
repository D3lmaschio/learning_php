<?php

require_once 'functions.php';

$currentAccounts = [
    '123.456.789-10' => [
        'titular' => 'Matheus',
        'saldo' => 1000
    ],

    '123.456.789-11' => [
        'titular' => 'Jorge',
        'saldo' => 2000
    ],

    '123.456.789-12' => [
        'titular' => 'Yasmin',
        'saldo' => 3000
    ],
];

$currentAccounts['123.456.789-10'] = withdraw($currentAccounts['123.456.789-10'], 500);
$currentAccounts['123.456.789-11'] = deposit($currentAccounts['123.456.789-11'], 1000);
$currentAccounts['123.456.789-10'] = deposit($currentAccounts['123.456.789-10'], 200);
$currentAccounts['123.456.789-12'] = deposit($currentAccounts['123.456.789-12'], 5000);

$matheus = &$currentAccounts['123.456.789-10'];
$jorge = &$currentAccounts['123.456.789-11'];
$yasmin = &$currentAccounts['123.456.789-12'];

transfer($yasmin, $matheus, 4000);

unset($currentAccounts['123.456.789-12']);

#foreach ($currentAccounts as $cpf => $account) {
#    # list('titular' => $titular, 'saldo' => $saldo) = $account;
#    ['titular' => $titular, 'saldo' => $saldo] = $account;
#    printl("CPF: $cpf" . PHP_EOL . "Titular: $titular" . PHP_EOL . "Saldo: $saldo" . PHP_EOL);
#}

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <ul>
        <?php foreach($currentAccounts as $cpf => $account) {?>
            <?php ['titular' => $titular, 'saldo' => $saldo] = $account; ?>
            <li><p>Titular: <?=$titular?> - CPF: <?=$cpf?></p></li>
            <p>Saldo: <?=$saldo?></p>
            <br>
        <?php } ?>
    </ul>
</body>
</html>
