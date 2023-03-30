<?php

require_once 'autoload.php';

use LI2\Bank\Model\Employee\{Director, Manager};
use LI2\Bank\Model\Cpf;
use LI2\Bank\Model\Service\Authenticator;

$director = new Director(
    'Matheus',
    new Cpf('123.456.789-10'),
    new DateTimeImmutable('04-10-2002'),
    20000
);

$manager = new Manager(
    'Julio',
    new Cpf('123.456.789-11'),
    new DateTimeImmutable('04-10-2000'),
    10000
);

$authenticator = new Authenticator();

$authenticator->authenticate($director, 1234);
$authenticator->authenticate($manager, 1234);

