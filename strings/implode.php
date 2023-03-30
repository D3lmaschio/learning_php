<?php

function csv_create(string $csv, string $filename) : bool
{
    $handle = fopen("C:\Users\mathe\PhpstormProjects\learning_php\strings\\$filename.csv", 'x+');

    if (fwrite($handle, $csv) == false) {
        fclose($handle);
        return false;
    }

    fclose($handle);
    return true;
}

$array = [
    'id' => 0,
    'name' => 'jorge',
    'idade' => 20,
    'cpf' => '222.222.222-22',
];


$csv = implode(',', $array);

csv_create($csv, 'teste');

echo $csv . PHP_EOL;

