<?php

echo "Enter the path directory to list files:" . PHP_EOL . '> ';
$input = fgets(STDIN);

$dir = dir(trim($input)); // The method dir() is the correct form to instantiate the class Directory.

// Listing all files in directory:
while ($file = $dir->read())
{
    echo $file . PHP_EOL;
}