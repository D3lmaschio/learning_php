<?php

namespace LI2\Bank\Model\Service;

use LI2\Bank\Model\Authenticable;
use LI2\Bank\Model\Employee\Employee;

class Authenticator
{
    public function authenticate(Authenticable $emp, string $pass): void
    {
        if ($emp->auth($pass)) {
            echo 'Logado' . PHP_EOL;
        } else {
            echo 'Senha incorreta' . PHP_EOL;
        }
    }
}