<?php

namespace LI2\Bank\Model\Employee;

use LI2\Bank\Model\PrivateMethodAccess;

class Developer extends Employee
{
    use PrivateMethodAccess;

    /**
     * @return float
     */
    public function calcBonus(): float
    {
        return $this->wage * 0.1;
    }
}