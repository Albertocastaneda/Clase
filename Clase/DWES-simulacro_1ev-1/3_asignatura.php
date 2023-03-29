<?php

/**
 * Clase Asignatura
 */

 class Asignatura{
    protected $nombre;
    protected $horas;
    protected $profesor;

    function __construct($nombre, $horas, $profesor) {
    	$this->nombre = $nombre;
    	$this->horas = $horas;
    	$this->profesor = $profesor;
    
    }

    public function getNombre() {
    	return $this->nombre;
    }

    public function getHoras() {
    	return $this->horas;
    }

    public function getProfesor() {
    	return $this->profesor;
    }

    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function setHoras($horas) {
    	$this->horas = $horas;
    }

    public function setProfesor($profesor) {
    	$this->profesor = $profesor;
    }
    public function toArray(){
        $arrayInstancia =[
            "nombre" => $this->nombre,
            "profesor" => $this->profesor,
            "horas" => $this->horas,
        ];
        return $arrayInstancia;
    }
    public function guardar(){
        $datosJSON = file_get_contents("3_datos.json");
        $todasAsignatura = json_decode($datosJSON,true,512,JSON_UNESCAPED_UNICODE);
        //$this->toArray($todasAsignatura);
        array_push($todasAsignatura, $this->toArray());
    }

    public function __toString() {
    	return "Nombre: {$this->nombre}, Horas: {$this->horas}, Profesor: {$this->profesor}";
    }
 }