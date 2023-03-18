<?php

$dados = [
    'nome' => 'Matheus',
    'nota' => 10,
    'idade' => 20
];
#list($nome, $nota, $idade) = $dados;
['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

# Extrai as chaves e transforma em variáveis e atribui os respectivos valores às variáveis
extract($dados);

var_dump($nome);
var_dump($nota);
var_dump($idade);

# Cria um Array usando o nome da variável como chave e utiliza o valor da variável como valor da chave no Array
$newArray = compact('nome', 'nota', 'idade');


