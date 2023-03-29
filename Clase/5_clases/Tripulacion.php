<?php
//clase tripulacion que contiene los atributos que van a heredar marinero y capitan
class Tripulacion{
    //atributos
    private $nombre;
    private $apodo;
    private $edad;

    
    //Metodos constructor gettters y setters
    function __construct($nombre, $apodo, $edad) {
    	$this->nombre = $nombre;
    	$this->apodo = $apodo;
    	$this->edad = $edad;
    
    }

    public function getNombre() {
    	return $this->nombre;
    }

    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function getApodo() {
    	return $this->apodo;
    }

    public function setApodo($apodo) {
    	$this->apodo = $apodo;
    }

    public function getEdad() {
    	return $this->edad;
    }

    public function setEdad($edad) {
    	$this->edad = $edad;
    }

    public function __toString() {
    	return "Nombre: {$this->nombre}, Apodo: {$this->apodo}, Edad: {$this->edad}";
    }
    //Funcion que muestra quien limpia los platos
    public function limpiarPlatos(){
        echo("Los platos fueron limpiados por ".$this->getNombre()."<br>");
    }
}
//clase marinero hereda de tripulacion
class Marinero extends Tripulacion{
    //atributo que va a contar cuantas veces limpia la cubierta cada marinero
    private $limpiar = 0;
    //Metodos constructor gettters y setters
    function __construct($nombre, $apodo, $edad) {
        parent::__construct($nombre, $apodo, $edad);
    }
    public function getLimpiar() {
        return $this->limpiar;
    }
    
    public function setLimpiar($limpiar) {
        $this->limpiar = $limpiar;
    }
    public function __toString() {
    	return "Marinero con Nombre: ". $this->getNombre(). " Apodo: ". $this->getApodo(). " Edad: ". $this->getEdad();
    }
    public function contador(){
        return $this->limpiar++;
    }
//Funcion que muestra quien limpia la cubierta
    public function Limpiar(){
        $this->limpiar++;
        echo("El marinero ".$this->getnombre()." ha limpiado la cubierta");
        echo("<br>");
        echo("Numero de veces que la cubierta fue limpiada " .$this->limpiar."<br>");
    }
}
//clase capitan hereda de tripulacion
class Capitan extends Tripulacion{
    //atributo destino que solo conoce el capitan
    private $destino;
    //Metodos constructor gettters y setters
    function __construct($nombre, $apodo, $edad,$destino) {
        parent::__construct($nombre, $apodo, $edad);
        $this->destino = $destino;
    }

    public function getDestino() {
    	return $this->destino;
    }

    public function setDestino($destino) {
    	$this->destino = $destino;
    }

    public function __toString() {
    	return "Capitan con Nombre: ". $this->getNombre(). " Apodo: ". $this->getApodo(). " Edad: ". $this->getEdad();
    }
    //Funcion que muestra el destino puesto por el capitan
    public function destino(){
        echo("El capitan " .$this->getNombre(). " a decidido que el destino es ".$this->getDestino()."<br>");
    }
}
//creo las istancias de las clases
$Marinero1 = new Marinero("Pablo","Maquetador",21);
$Marinero2 = new Marinero("Marcos","Peruano",23);
$capitan = new Capitan("Siro","Siropez", 22, "Peru");
//pruebo los metodos limpiar la cubierta, los platos y el destino del capitan
echo($Marinero1);
echo("<br>");
echo($Marinero2);
echo("<br>");
echo($capitan);
echo("<br>");
$Marinero1->Limpiar();
$Marinero1->Limpiar();
$Marinero1->Limpiar();
$Marinero2->Limpiar();
$Marinero1->Limpiar();
$Marinero2->Limpiar();
$Marinero2->Limpiar();
$Marinero1->Limpiar(); 
$Marinero1->limpiarPlatos();
$Marinero2->limpiarPlatos();
$capitan->destino();
$capitan->limpiarPlatos();
