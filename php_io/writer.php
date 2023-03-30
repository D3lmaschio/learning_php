<?php

$data = file_get_contents("php://filter/read=string.toupper/resource=file-to-read.txt");

file_put_contents("writed-file.txt", $data);