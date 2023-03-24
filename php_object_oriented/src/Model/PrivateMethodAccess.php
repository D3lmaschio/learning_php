<?php

namespace LI2\Bank\Model;

trait PrivateMethodAccess
{
    public function __get(string $attribute): string
    {
        $method = 'get' . ucfirst($attribute);
        return $this->$method();
    }
}