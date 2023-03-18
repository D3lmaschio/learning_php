<?php

function printl(string $message): void
{
    echo $message . PHP_EOL;
}

function withdraw($account, float $withdrawValue): null | array
{
    if ($withdrawValue > $account['saldo']) {
        printl("Valor de saldo insuficiente para saque.");
        return null;
    } else {
        $account['saldo'] -= $withdrawValue;
        return $account;
    }
}

function deposit($account, $depositValue): null | array
{
    if ($depositValue < 0) {
        printl("Valor incorreto, são permitidos apenas valores positivos.");
        return $account;
    } else {
        $account['saldo'] = $account['saldo'] + $depositValue;
        return $account;
    }
}

function transfer(array &$outboundAcc, array &$inboundAcc, float $value): bool
{
    if ($value > $outboundAcc['saldo']) {
        return false;
    } else {
        $outboundAcc['saldo'] = $outboundAcc['saldo'] - $value;
        $inboundAcc['saldo'] = $inboundAcc['saldo'] + $value;
        return true;
    }
}