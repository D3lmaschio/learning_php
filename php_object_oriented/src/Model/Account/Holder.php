<?php

namespace LI2\Bank\Model\Account;

use DateTimeImmutable;
use LI2\Bank\Model\{Authenticable, IPerson, Address, Cpf};

class Holder extends IPerson implements Authenticable
{
    public function __construct(
        string            $name,
        Cpf               $cpf,
        DateTimeImmutable $birth,
        private Address   $address,
    )
    {
        parent::__construct($name, $cpf, $birth);
    }

    /**
     * @param string $pass
     * @return bool
     */
    public function auth(string $pass): bool
    {
        return $pass === '12345';
    }
}