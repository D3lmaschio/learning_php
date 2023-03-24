<?php

namespace LI2\Bank\Model\Account;

abstract class Account
{
    public function __construct(
        protected Holder $holder,
        protected float  $balance = 0
    )
    {
    }

    public function __destruct()
    {
        echo 'Objeto Account apagado.' . PHP_EOL;
    }

    /**
     * Returns withdraw value plus taxes.
     *
     * @param $value
     * @return float
     */
    public function withdraw($value): float
    {
        $withdrawValue = $value + ($value * $this->withdrawTax());
        if ($this->balance >= $withdrawValue) {
            $this->balance -= $withdrawValue;
            return $withdrawValue;
        }
        return 0;
    }

    public function deposit($valor): bool
    {
        if ($valor >= 0) {
            $this->balance += $valor;
            return true;
        }

        return false;
    }

    public function transfer($value, $account): bool
    {
        if ($value >= 0 && $value <= $this->balance) {
            $account->deposit($this->withdraw($value));
            return true;
        }

        return false;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getHolder(): Holder
    {
        return $this->holder;
    }

    /**
     * This method should return the proper tax for type account.
     *
     * @return float
     */
    abstract protected function withdrawTax(): float;
}