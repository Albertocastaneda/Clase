<?php

$letra = "A";

$palabra = "contrasenia";
$array_char = str_split($palabra);

echo"La letra $letra es en ASCII: ".ord($letra);

echo("<br>");

foreach ($array_char as $key => $value) {
    echo $value . "<br>";
}


function encoder($texto, $offset){
    $array_caracteres = str_split($texto);
    $array_encoded = array_map(fn($el) => chr(ord($el) + $offset), $array_caracteres);
    $texto_encoded = implode($array_encoded);
    return $texto_encoded;
}
echo(encoder("hola mundo",5));