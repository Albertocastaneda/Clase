<?php

echo("<h1>Tablas de multiplicar</h1>");
echo("<ul>");

define("Tabla", 5);
for ($i= 0; $i <=10 ; $i++) { 
    echo("<li>". Tabla . " x " . $i . " = ". Tabla* $i. "</li>");
}
echo("</ul>");

echo("<h2>Tablas de multiplicar</h2>");
echo("<table>");
for ($i=0; $i <=10 ; $i++) { 
    echo("<tr>Tabla del ".$i);
    for ($j=0; $j <=10 ; $j++) { 
        echo("<td>". $i . " x " . $j . " = ". $i* $j. "</td>");
    }
    echo("</tr>");
}
echo("</table>");