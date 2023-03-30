<?php

namespace LI2\Bank\Model\Account;

class CheckingAccount extends Account
{
    public function __destruct()
    {
        echo "Destruindo objeto CheckingAccount" . PHP_EOL;
    }

    /**
     * @return float
     */
    protected function withdrawTax(): float
    {
        return 0.03;
    }
}