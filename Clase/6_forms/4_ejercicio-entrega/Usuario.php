<?php

class Usuario{
    private $nombre;
    private $apellidos;
    private $email; 
    private $contrasea;
    private $hobbies;
    
    

    function __construct($nombre, $apellidos, $email, $contrasea, $hobbies) {
    	$this->nombre = $nombre;
    	$this->apellidos = $apellidos;
    	$this->email = $email;
    	$this->contrasea = $contrasea;
    	$this->hobbies = $hobbies;
    
    }

    public function getNombre() {
    	return $this->nombre;
    }

    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function getApellidos() {
    	return $this->apellidos;
    }

    public function setApellidos($apellidos) {
    	$this->apellidos = $apellidos;
    }

    public function getEmail() {
    	return $this->email;
    }

    public function setEmail($email) {
    	$this->email = $email;
    }

    public function getContrasea() {
    	return $this->contrasea;
    }

    public function setContrasea($contrasea) {
    	$this->contrasea = $contrasea;
    }

    public function getHobbies() {
    	return $this->hobbies;
    }

    public function setHobbies($hobbies) {
    	$this->hobbies = $hobbies;
    }

    public function __toString() {
    	return "Nombre: {$this->nombre}, Apellidos: {$this->apellidos}, Email: {$this->email}, Contrasea: {$this->contrasea}, Hobbies: {$this->hobbies}";
    }
}
//estancias de usuario creadas
$usuario1 = new Usuario("Siro","Siropez","Siro@mail.com",1,"Cookies,Cookies, css");
$usuario2 = new Usuario("Tizziano","Tizzianete","Tizziano@mail.com",2,"Barbacoas, Cookies, Ñapas");
$usuario3 = new Usuario("Hugo","Si","Hugo@mail.com",3,"Gym, Pitar,Meter Mierda a Tizziano");
//usuarios almacenados en un array
$usuarios = [$usuario1, $usuario2, $usuario3];