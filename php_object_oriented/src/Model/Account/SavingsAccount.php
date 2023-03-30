<?php

namespace LI2\Bank\Model\Account;

class SavingsAccount extends Account
{

    public function __destruct()
    {
        echo "Destruindo objeto SavingsAccount" . PHP_EOL;
    }

    /**
     * @return float
     */
    protected function withdrawTax(): float
    {
        return 0.05;
    }
}