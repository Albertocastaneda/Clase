<?php

$n1 = 3;
$n2 = 5;

function sumaReturn($n1,$n2){
    return $n1 + $n2;
}

echo(sumaReturn($n1, $n2)."<br>");

function sumaEcho($n1, $n2){
    $operacion = $n1 + $n2;
    echo "el resultado es $operacion". "<br>";
}

sumaEcho($n1, $n2);

$sumaAnonima = function($n1, $n2){
    echo("el resultado es " .$n1+$n2. "<br>");
};
$sumaAnonima($n1, $n2);

$sumaFlecha = fn($n1,$n2) => $n1 + $n2;

echo("El resultado es " .$sumaFlecha($n1,$n2)."<br>");

function calculadora($numero1, $numero2, $operacion){
    switch ($operacion) {
        case 'suma':
            return $numero1 + $numero2;
            break;
        case 'resta':
           return $numero1 - $numero2;
            break;
        case 'multiplicacion':
            return $numero1 * $numero2;
            break;
        case 'division':
            if ($numero1 == 0) {
                return "no se puede dividir entre 0"
            } else {
                return $numero1 / $numero2;
            }
            break;
        default:
            
            break;
    }
}

echo(calculadora(4,5, 'division'));