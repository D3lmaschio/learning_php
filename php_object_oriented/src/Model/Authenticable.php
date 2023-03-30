<?php

namespace LI2\Bank\Model;

interface Authenticable
{
    public function auth(string $pass): bool;
}