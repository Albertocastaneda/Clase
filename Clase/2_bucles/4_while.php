<?php

$cont = 1;

while ($cont <= 100) {
    if ($cont%2 == 1) {
        echo("$cont <br>");
    }
    $cont++;
}

$numeros = 2;
define("MAX", 100);

while ($numeros <= MAX) {
    $anteriores = 2;
    while ($anteriores <= $numeros) {
        $resta = $numeros % $anteriores;
        if (($resta) === 0 && $anteriores < $numeros) {
            //echo("divisible por: " .$anteriores);
            break;
        }elseif ($numeros === $anteriores) {
            echo "$numeros es primo <br>";
        }
        $anteriores++;
    }
    $numeros++;
}