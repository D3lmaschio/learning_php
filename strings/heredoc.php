<?php

function heredoc(): void
{
    $var =0;
    $texto = <<<END
    Olá, bom dia $var
    teste
    END;

    echo $texto  . PHP_EOL;
}

function nowdoc(): void
{
    $var =0;
    $texto = <<<'END'
    Olá, bom dia $var
    teste
    END;

    echo $texto . PHP_EOL;
}

heredoc();
nowdoc();
