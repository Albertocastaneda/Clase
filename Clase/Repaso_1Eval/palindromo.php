<?php

function palindromo($frase){
    for ($i= strlen($frase) - 1; $i >= 0 ; $i--) { 
        echo $frase[$i];
    }
}
echo(palindromo("hola"));