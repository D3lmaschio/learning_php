<?php

require_once 'autoload.php';

use LI2\Bank\Model\{Address};

$address = new Address('Rua dos Bolseiros', '1', 'Terra Média', 'Condado dos Hobbits', '12345');

echo "Antes de alterar: " . $address->city . PHP_EOL;

$address->city = 'Mordor';

echo "Depois de alterar: " . $address->city . PHP_EOL;