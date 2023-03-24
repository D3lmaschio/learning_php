<?php
require_once 'autoload.php';

use LI2\Bank\Model\Account\CheckingAccount;
use LI2\Bank\Model\Account\SavingsAccount;
use LI2\Bank\Model\Account\Holder;
use LI2\Bank\Model\Cpf;
use LI2\Bank\Model\Address;

$savings_account = new SavingsAccount(
    new Holder(
        'Matheus',
        new Cpf('222.222.222-22'),
        new DateTimeImmutable('04-10-2002'),
        new Address(
            'Rua Casa Branca',
            '124',
            'Brazil',
            'Guarulhos',
            '07142270')
    ),
    500
);

$checking_account = new CheckingAccount(
    new Holder(
        'Jorge',
        new Cpf('222.222.222-22'),
        new DateTimeImmutable('04-10-2002'),
        new Address(
            'Rua Casa Branca',
            '124',
            'Brazil',
            'Guarulhos',
            '07142270')
    ),
    500
);

echo "Savings Account: {$savings_account->getBalance()}" . PHP_EOL;
echo "Withdraw plus taxes: {$savings_account->withdraw(100)}" . PHP_EOL;
echo "Balance: {$savings_account->getBalance()}" . PHP_EOL;

echo PHP_EOL;

echo "Checking Account: {$checking_account->getBalance()}" . PHP_EOL;
echo "Withdraw plus taxes: {$checking_account->withdraw(100)}" . PHP_EOL;
echo "Balance: {$checking_account->getBalance()}" . PHP_EOL;

echo PHP_EOL;
