<?php

define("Longitud", 100);
$numeros = [];
for ($i=0; $i <= Longitud - 1 ; $i++) { 
    $numeros[$i] = $i +1;
}
print_r($numeros);

function par ($num){
    if ($num % 2 == 0) {
        return true;
    }
}
echo("<br>");

function numPrimo($num){
    for ($i=2; $i <$num ; $i++) { 
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo("<br>");

$newArray = array_filter($numeros, fn($num) => $num % 2 == 0?true:false);
print_r($newArray);
echo("<br>");
echo("<br>");
$arrayPrimos = array_filter($numeros, "numPrimo");
echo("primos");
print_r(array_values($arrayPrimos));