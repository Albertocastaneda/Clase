<?php


$agenda = [
    "Sonia"=>"666444555",
    "Cecilia"=>"443343234",
    "Adán"=>"343222234",
];

echo($agenda["Sonia"]);
echo("<br>");

foreach ($agenda as $persona => $telefono) {
    echo("<p> El numero de $persona es $telefono</p>");
}




$a = 3;
$b = "4";
$c = $a * $b;
echo($c);