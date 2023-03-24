<?php

require_once 'autoload.php';

use LI2\Bank\Model\Employee\{Developer, Manager};
use LI2\Bank\Model\Cpf;
use LI2\Bank\Model\Service\BonusesController;

$employee1 = new Developer(
    'Jão',
    new Cpf('222.222.222-12'),
    new DateTimeImmutable('04-10-2003'),
    1000,
);

$employee2 = new Manager(
    'Mat',
    new Cpf('222.222.222-22'),
    new DateTimeImmutable('04-10-2002'),
    3000,
);

$bc = new BonusesController();

$bc->addBonus($employee1);
echo $bc->getTotal() . PHP_EOL;

$bc->addBonus($employee2);
echo $bc->getTotal() . PHP_EOL;