<?php

namespace LI2\Bank\Model\Service;

require_once 'autoload.php';

use LI2\Bank\Model\Employee\Employee;

class BonusesController
{
    private float $totalBonuses = 0;

    public function addBonus(Employee $employee): void
    {
        $this->totalBonuses += $employee->calcBonus();
    }

    public function getTotal(): float
    {
        return $this->totalBonuses;
    }
}