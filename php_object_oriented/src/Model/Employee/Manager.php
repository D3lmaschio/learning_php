<?php

namespace LI2\Bank\Model\Employee;

require 'autoload.php';

use LI2\Bank\Model\Authenticable;

class Manager extends Employee implements Authenticable
{
    public function calcBonus(): float
    {
        return $this->wage * 1;
    }

    public function auth(string $pass): bool
    {
        return '4321' == $pass;
    }
}