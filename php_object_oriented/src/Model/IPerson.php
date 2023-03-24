<?php

namespace LI2\Bank\Model;

use DateTimeImmutable;

abstract class IPerson
{
    public function __construct(
        public readonly string            $name,
        public readonly Cpf               $cpf,
        public readonly DateTimeImmutable $birth,
    )
    {
    }

    public function info(): array
    {
        return [
            'name' => $this->name,
            'age' => $this->birth->diff(new DateTimeImmutable('now'))->y,
            'cpf' => $this->cpf->cpf,
        ];
    }
}