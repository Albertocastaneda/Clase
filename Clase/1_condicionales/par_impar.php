<?php

define("Minimo", 10);
define("Maximo", 20);

$num = rand(Minimo, Maximo);

if ($num % 2 != 0) {
    echo($num. " impar");
}else {
    echo($num ." numero par");
}