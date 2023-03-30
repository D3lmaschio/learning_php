<?php

namespace LI2\Bank\Model;

final class Cpf
{
    public function __construct(public readonly string $cpf)
    {
        $regex = "/^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/";
        if(!preg_match($regex, $cpf)) {
            echo "CPF Inválido." . PHP_EOL;
            exit();
        }
    }
}