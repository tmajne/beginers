<?php

/**
 * Przypisanie przez referencje
 */

$i = 10;

var_dump($i);


// przypisanie przez referencje
$j = & $i;

var_dump($j);

$j = $j + 1;

var_dump($i, $j);

