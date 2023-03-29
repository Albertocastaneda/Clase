<?php


function factorial($num){
    $factorial = 1;
    echo($num. "! = ");
    for ($i=1; $i <= $num ; $i++) { 
        $factorial = $factorial * $i;
        if ($i == $num -1) {
            echo($i . " X " . $i +1);
        } else {
            echo($i . " X ");
        }
    }
    echo" = $factorial";
}

//$num = 5;
//$resultadoFactrial = factorial($num);

echo(factorial(5));

echo("<br>");

function factorialRecursivo($num){
    if ($num > 1) {
        $resultado = $num * (factorialRecursivo($num - 1));
    } else {
        $resultado = $num;
    }
    return $resultado;
}       
//$num = 5;

echo(factorialRecursivo(5));

echo("<br>");

function factorial_r2($num){
    if ($num == 1) {
        return 1;
    } else {
        return $num * factorial_r2($num - 1);
    }
}

echo(factorial_r2(5));

echo("<br>");

function factorial_r3($num){
    return $num==1?1:$num*factorial_r3($num-1);
}

echo(factorial_r3(5));