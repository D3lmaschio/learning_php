<?php

namespace LI2\Bank\Model\Employee;

use DateTimeImmutable;
use LI2\Bank\Model\IPerson;
use LI2\Bank\Model\Cpf;

require_once 'autoload.php';

abstract class Employee extends IPerson
{
    public function __construct(
        string            $name,
        Cpf               $cpf,
        DateTimeImmutable $birth,
        float             $wage,
    )
    {
        parent::__construct($name, $cpf, $birth);
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    final public function getWage(): float
    {
        return $this->wage;
    }

    abstract public function calcBonus(): float;
}
