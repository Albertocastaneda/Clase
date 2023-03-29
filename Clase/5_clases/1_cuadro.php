<?php


class Cuadrado{
    private $lado;
    private $color;
    private $area;

    function __construct($lado,$color){
        $this->lado = $lado;
        $this->color = $color;
        $this->area = $this->lado**2;
    }

    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado)
    {
        $this->lado = $lado;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
 
    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    function __toString(){
        return("Este objeto es un: " .get_class($this)."lado: $this->lado color: $this->color area: $this->area");
    }
}
$cuadrado1 = new Cuadrado(2,"rojo");

echo "El lado es ".$cuadrado1->getLado();
echo("<br>");
$cuadrado1->setLado(3);

echo "El lado es ".$cuadrado1->getLado();