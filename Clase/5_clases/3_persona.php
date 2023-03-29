<?php

class Persona{
    
    private $nombre;
    private $altura;
    private $peso;
    private $patrimonio;
    
    function __construct($nombre, $altura, $peso, $patrimonio) {
        $this->nombre = $nombre;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->patrimonio = $patrimonio;
    
    }

    public function getNombre() {
    	return $this->nombre;
    }

    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function getAltura() {
    	return $this->altura;
    }

    public function setAltura($altura) {
    	$this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }
    
    public function getPatrimonio() {
        return $this->patrimonio;
    }
    
    public function setPatrimonio($patrimonio) {
        $this->patrimonio = $patrimonio;
    }
    public function __toString() {
    	return "Nombre: {$this->nombre}, Altura: {$this->altura}, Peso: {$this->peso}, Patrimonio: {$this->patrimonio}";
    }

    public function saludar($nombre = "desconocido"){
        echo("Hola ". $nombre);
    }
}
$persona = new Persona("Pepe",1.75,80,100000);
$persona->saludar();

echo($persona ->__toString());

class Trabajador extends Persona{

    private $sueldo;
    private $empresa;

    function __construct($nombre, $altura, $peso, $patrimonio,$sueldo, $empresa) {
        parent::__construct($nombre, $altura, $peso, $patrimonio);
    	$this->sueldo = $sueldo;
    	$this->empresa = $empresa;
    }

    public function getSueldo() {
    	return $this->sueldo;
    }

    public function setSueldo($sueldo) {
    	$this->sueldo = $sueldo;
    }

    public function getEmpresa() {
    	return $this->empresa;
    }

    public function setEmpresa($empresa) {
    	$this->empresa = $empresa;
    }

    public function __toString() {
    	return "Sueldo: {$this->sueldo}, Empresa: {$this->empresa}";
    }

    public function cobrar(){
        $this ->setPatrimonio($this->getPatrimonio() + $this->getSueldo());
    }
}