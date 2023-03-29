<?php
function numeros ($numero = 1){
    $arrayNumeros = [];
    for ($i=$numero; $i >= 0; $i--) { 
        array_push($arrayNumeros,$i);
    }
    return $arrayNumeros;
}
var_dump(numeros(6));
