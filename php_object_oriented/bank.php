<?php

require_once 'autoload.php';

use LI2\Bank\Model\Account\{CheckingAccount, Holder};
use LI2\Bank\Model\{Cpf, Address, Employee};

$account = new CheckingAccount(
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
    )
);

extract($account->getHolder()->info());
$account->deposit(200);
$balance = $account->getBalance();

echo "Owner: $name\nAge: $age\nCPF: $cpf\nBalance: $balance\nAddress: $address" . PHP_EOL;

$account->getHolder()->changeName('Jonas');
extract($account->getHolder()->info());
echo "Owner: $name\nAge: $age\nCPF: $cpf\nBalance: $balance\nAddress: $address" . PHP_EOL;

echo PHP_EOL;
var_dump($account);
echo PHP_EOL;

$employee = new Employee(
    'Jão',
    new Cpf('222.222.222-12'),
    new DateTimeImmutable('04-10-2003'),
    'Manager',
    1000,
    0.05
);

extract($employee->info());
echo "Employee Info\nName: $name\nAge: $age\nCPF: $cpf" . PHP_EOL;


