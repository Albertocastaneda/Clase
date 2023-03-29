<?php

function porDos($num){
    return $num * 2;
}

define("MAX", 100);

$numeros = [];

for ($i=0; $i < MAX ; $i++) { 
    $numeros[$i] = $i + 1;

}

$doble =  array_map("porDos", $numeros);
print_r($numeros);
echo("<br>");
echo("<br>");
print_r($doble);

echo("<br>");
echo("<br>");
$personas = [
    ["nombre" => "Clikiano" ,"edad" => 19],
    ["nombre" => "Hugo" ,"edad" => 22],
    ["nombre" => "Siro" , "edad" => 22],
    ["nombre" => "Pablo" , "edad" => 17],
    ["nombre" => "Mario" , "edad" => 16],
    ["nombre" => "Pedro" , "edad" => 25],
];

$estudiantes = array_map("addCiclo",$personas);

function addCiclo($personas){
    $personas["ciclo"] = "DAW";
    return $personas;
}

var_dump($estudiantes);

echo("<br>");
echo("<br>");

$beber = array_map("mayorEdad", $personas);

function mayorEdad($personas){

    if ($personas["edad"] > 18) {
        $personas["mayorEdad"] = "Si";
        return $personas;
    } else {
        $personas["mayorEdad"] = "No";
        return $personas;
    }
}
var_dump($beber);

