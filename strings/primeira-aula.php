<?php
$nome = 'Matheus Delmaschio';

$familia = str_contains($nome, 'Delmaschio');

if ($familia) {
    echo "$nome é da minha família";
} else {
    echo "$nome não é da minha família";
}