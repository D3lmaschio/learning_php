<?php

$handle = fopen('file-to-read.txt', 'r');

stream_copy_to_stream($handle, STDOUT);

echo strtoupper("Below the method readfile() is used to print a stream to STDOUT.") . PHP_EOL . PHP_EOL;

readfile('file-to-read.txt');

