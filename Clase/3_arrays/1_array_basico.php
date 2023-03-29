<?php


$listaCompra = array("pan","cafe","cereales","huevos","leche");
$listaCompra2 =["pan","cafe","cereales","huevos","leche"];

print_r($listaCompra);

echo("<br>");

echo($listaCompra[1]);
echo("<br>");
$listaCompra3[] = "pan";
print_r($listaCompra3);
echo("<br>");
$elementos = count($listaCompra);
echo($elementos);
echo("<br>");

for ($i=0; $i <count($listaCompra) ; $i++) { 
    echo($listaCompra[$i]. "<br>");
}
echo("<br>");

foreach($listaCompra as $elementos){
    echo("$elementos <br>");
}



