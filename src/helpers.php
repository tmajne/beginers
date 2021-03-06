<?php

function dump(...$args)
{
    echo "\n";
    foreach ($args as $arg) {
        var_dump($arg);
        echo "\n";
    }
}
