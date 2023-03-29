<?php


define("random",rand(1,20));
$array = [];
for ($i=0; $i <random ; $i++) { 
    $array[$i] = rand(1,20);
}
print_r($array);