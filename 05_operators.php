<?php

// Bereken de rest bij gehele deling van 10 door 3.
$deling = 10%3;
echo $deling, "<br>";
// Bereken de 5e macht van 2.
$macht = pow(2,5);
echo $macht, "<br>";

$var_a = "123";
$var_b = 123;

// Vervang de true in de if-voorwaarden zodat het klopt wat er staat:

if($var_a == $var_b && gettype($var_a) != gettype($var_b)) {
    echo '$var_a en $var_b zijn aan elkaar gelijk maar zijn niet van hetzelfde type.';
}

if($var_a == $var_b && gettype($var_a) == gettype($var_b)) {
    echo '$var_a en $var_b zijn aan elkaar gelijk en van hetzelfde type.';
}

?>
