<?php

require_once 'MyFilter.php';

$stream = fopen('file-to-read.txt', 'r');

stream_filter_register('lorem.ipsum', MyFilter::class);
stream_filter_append($stream, 'lorem.ipsum');


echo fread($stream, filesize('file-to-read.txt'));
