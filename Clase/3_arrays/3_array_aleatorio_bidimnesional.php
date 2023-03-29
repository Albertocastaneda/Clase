<?php

define("random",rand(1,5));
$array1 =[];
$array2 = [];
for ($i=0; $i <random ; $i++) { 
    for ($j=0; $j<random ; $j++) { 
        $array2[$j] = rand(1,5);
    }
    $array1[$i] = $array2;
}
print_r($array1);