<?php

require_once 'autoload.php';

use LI2\Bank\Model\{Address, Cpf};
use LI2\Bank\Model\Account\{Holder, CheckingAccount};

$address = new Address('rua', '1', 'Brasil', 'São Paulo', '3460894');
$cpf = new Cpf('111.111.111-11');
$holder = new Holder(
    'Matheus',
    $cpf,
    new DateTimeImmutable('04-10-2002'),
    $address
);
$account = new CheckingAccount($holder, 1000);


