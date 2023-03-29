<?php

for ($i=0; $i < 10; $i++) { 
    echo($i+1);
}

define("Tabla", 5);

for ($i= 0; $i <=10 ; $i++) { 
    echo(Tabla . " x " . $i . " = ". Tabla* $i. "<br>");
}