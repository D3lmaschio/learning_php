<?php

$file = new SplFileObject('courses.csv');

while (!$file->eof())
{
    $lines = $file->fgetcsv(';');

    if ($lines[0]) echo $lines[0] . ' => ' . $lines[1] . PHP_EOL;
}