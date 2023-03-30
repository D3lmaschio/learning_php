<?php

spl_autoload_register(function (string $namespace) {
    $filepath = str_replace('LI2\\Bank', '/home/matheusrdb/repos/PHP/learning_php/php_object_oriented/src', $namespace);
    $filepath = str_replace('\\', DIRECTORY_SEPARATOR, $filepath);
    $filepath .= '.php';
    if (file_exists($filepath)) {
        require $filepath;
    }
});