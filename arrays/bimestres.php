<?php

$notasBimestre1 = [
    'Matheus' => 10,
    'João' => 6,
    'Sara' => 8,
    'Jorge' => 5,
];

$notasBimestre2 = [
    'Matheus' => 10,
    'João' => 6,
];

$alunosFaltantes = array_diff_assoc($notasBimestre1, $notasBimestre2);

var_dump($alunosFaltantes);

$nomeAlunos = array_keys($alunosFaltantes);
$notaAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomeAlunos, $notaAlunos));
var_dump(array_flip($alunosFaltantes));