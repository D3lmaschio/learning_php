<?php

namespace LI2\Bank\Model\Employee;

require_once 'autoload.php';

use \LI2\Bank\Model\Authenticable;

class Director extends Employee implements Authenticable
{

    public function auth(string $pass): bool
    {
        return '1234' == $pass;
    }

    public function calcBonus(): float
    {
        return $this->wage * 0.5;
    }
}