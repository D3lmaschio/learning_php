<?php

$alunos2022 = [
    'Matheus',
    'João',
    'Sara',
    'Jorge'
];

$alunos2023 = [
    'Goku',
    'Gohan',
    'Krillin',
    'Kame',
];

$alunos2023 = [...$alunos2022, 'Guilherme', ...$alunos2023];
array_push($alunos2023, 'Zoro', 'Luffy', 'Sanji', 'Nami');

var_dump($alunos2023);

