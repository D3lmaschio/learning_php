<?php

function f1()
{
    echo 'B BEGIN' . PHP_EOL;
    f2();
    echo 'B END' . PHP_EOL;
}

function f2()
{
    echo 'A BEGIN' . PHP_EOL;
    $var = random_int(0, 10);
    $ex = new Exception();
    if ($var == 5) {
        throw new Exception('mensagem', 0, new Exception('', 0, $ex));
    }
    echo 'A END' . PHP_EOL;
}

echo 'MAIN BEGIN' . PHP_EOL;
f1();
echo 'MAIN END' . PHP_EOL;