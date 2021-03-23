<?php

/**
 * Przypisanie przez kopiowanie
 */

$i = 10;

// 10 - wartość
// = operator przypisania
// $i - zmienna

//var_dump($i);


// przypisanie przez kopiowanie
$j = $i;

//var_dump($j);

$j = $j + 1;

$i = 8;

var_dump($i, $j);
