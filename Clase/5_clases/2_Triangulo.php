<?php

class Triangulo{
    
    private $base;
    private $altura;
    private $area;

    

    public function getBase() {
    	return $this->base;
    }

    public function setBase($base) {
    	$this->base = $base;
    }

    public function getAltura() {
    	return $this->altura;
    }

    public function setAltura($altura) {
    	$this->altura = $altura;
    }

    public function getArea() {
    	return $this->area;
    }

    public function setArea($area) {
    	$this->area = $area;
    }

    function __construct($base, $altura) {
    	$this->base = $base;
    	$this->altura = $altura;
    	$this->area = ($base * $altura) / 2;
    
    }
    function __toString(){
        return("Este objeto es un: " .get_class($this)."<br>".
        " base: $this->base <br>". 
        " altura: $this->altura <br>". 
        " area: $this->area");
    }
}

$triangulo = new Triangulo(5,8);

echo($triangulo);


$triangulosArray = [];
$datos = [
    ["base"=>3,"altura"=>6],
    ["base"=>4,"altura"=>7],
    ["base"=>8,"altura"=>5],
];

foreach ($datos as $key => $triangulo) {
    array_push($triangulosArray,new Triangulo($triangulo["base"],$triangulo["altura"]));
}

print_r($triangulosArray);

$array = [3,6,8,5,6,9];

function mayorQueCinco($num){
    if ($num>5) {
        return true;
    }else {
        return false;
    }
}

$nuevoArray = array_filter($array,"mayorQueCinco");
echo("<br>");
print_r($nuevoArray);
echo("<br>");

function base($elem){
    if ($elem["base"]< 4) {
     return true;
    }else {
     return false;
    }
}
//$arrayfiltrado = array_filter($datos, "base");
$arrayfiltrado = array_filter($datos,fn($elem)=>$elem["base"]<4?true:false);
print_r($arrayfiltrado);
echo("<br>");
$arrayfiltrado2 = array_filter($triangulosArray,fn($elemento) =>$elemento -> getArea() < 10 ?true:false);
var_dump($arrayfiltrado2);

