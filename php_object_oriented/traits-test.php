<?php

use LI2\Bank\Model\Employee\Developer;

require_once 'autoload.php';

$dev = new Developer(
    'Matheus',
    new \LI2\Bank\Model\Cpf('123.123.123-12'),
    new DateTimeImmutable('04-10-2002'),
    2000
);

echo $dev->cpf->cpf;