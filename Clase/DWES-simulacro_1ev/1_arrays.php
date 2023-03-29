<?php

/**
 * 
 * 1. Arrays:
 * Crear un array que recoja las notas de la asignatura "DWES" de 5 alumnos. Dicho array ha de ser asociativo y las notas números aleatorios entre 1 y 10.
 * Añadir por cada estudiante, una clave más "DWEC" con números aleatorios entre 1 y 10.
 * 
 */
$alumnos = ["Tizziano","Siro","Hugo","Alberto","Mario"];

// $array = [
//     "Tizziano"=>["DWES"=>9,"DWEC" => 10],
//     "Siro"=>["DWES"=>10,"DWEC" => 10],
//     "Hugo"=>["DWES"=>9,"DWEC" => 9],
//     "Alberto"=>["DWES"=>7,"DWEC" => 6],
//     "Mario"=>["DWES"=>8,"DWEC" => 10],
// ];
$notas = [];
foreach ($alumnos as $key => $alumno) {
    $notas[$alumno]=["DWES"=>rand(1,10)];
}
print_r($notas);

foreach ($notas as $alumno => $asignatura) {
    $notas[$alumno]["DWEC"] = rand(1,10);
}
print_r($notas);