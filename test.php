<?php

$arr = [
    [
        [
            [

            ]

        ]
    ],

    [
        [
            [

            ]

        ]
    ],

    [
        [
            [

            ]

        ]
    ],
];

foreach ($arr as $a) {
    echo '*';
    foreach ($a as $b) {
        echo '*';
        foreach ($b as $c) {
            echo '*'. PHP_EOL;;
        }
    }
}

echo PHP_EOL . PHP_EOL . PHP_EOL;

# Atribuindo um valor à uma variável
$var_1 = [1, 2, 3];

# Passando por valor da $var_1 para a $var_2: ( PASSING BY VALUE $)
$var_2 = $var_1;

echo 'Modificando o valor e checando se a alteração também acontece na $var_1' . PHP_EOL;
$var_2[0] = 10;
echo "var_1: $var_1[0]" . PHP_EOL;
echo "var_2: $var_2[0]" . PHP_EOL;

echo PHP_EOL;

# Passando por referência da $var_1 para a $var_2: ( PASSING BY REFERENCE &$)
$var_2 =& $var_1;

echo 'Modificando o valor e checando se a alteração também acontece na $var_1' . PHP_EOL;
$var_2[0] = 10;
echo "var_1: $var_1[0]" . PHP_EOL;
echo "var_2: $var_2[0]" . PHP_EOL;

echo PHP_EOL;

$v1 = 'teste';
$v2 = &$v1;
$v2 = 'teste_2';

echo $v1 === $v2;