<?php


//Punto 1 del ejercicio
$array = [];
   do {
    $longitud=rand(10,20);
   } while ($longitud % 2 !=0);
for ($i=0; $i <$longitud ; $i++) { 
    $array[$i] = rand(0,100);
}
echo("<p> Array con su longitud</p>");
print_r($array);

echo("<br>");
//Punto numero 2 del ejercicio
$numeroR1 = rand(0,100);
if ($numeroR1 >= 60) {
    $cont = 0;
    do {
        $numeroR1 = rand(0,100);
        array_unshift($array, $numeroR1);
        $cont++;
    } while ($cont != 6);
}elseif ($numeroR1<= 40) {
    $cont2 = 0;
    do {
        $numeroR1 = rand(0,100);
        array_push($array, $numeroR1);
        $cont2++;
    } while ($cont2 != 6);
    
}
echo("<p>Array al que se le añaden 6 numeros mas al principio o al final y los dos primeros y dos ultimos elementos eliminados</p>");

array_slice($array, 0,-2);
array_slice($array,2);
echo("<br>");
foreach ($array as $elemento) {
    echo("$elemento <br>");
}
echo("<br>");
if (in_array(42,$array) == true) {
        
    foreach ($array as $elemento => $valor) {
        if ($valor % 2 == 0) {
            echo("Primer valor par" .$valor);
            break;
        }
    }
}else if (in_array(42,$array) == false) {
    foreach ($array as $elemento => $valor) {
        if ($valor % 2 != 0) {
            echo("Primer valor impar" .$valor);
            break;
        }
    }
}
