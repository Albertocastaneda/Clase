<?php
require_once("index.php");
$dwes = new PDO("mysql:host=localhost:3306;dbname=dwes","root","");
$postEmail = $_POST['Email'];
$postcontrasenia = $_POST['Contraseña'];
$resultado = $dwes->prepare("SELECT * from usuarios where email = ? and pass = ?");
$resultado -> bindParam(1,$postEmail);
$resultado -> bindParam(2,$postcontrasenia);
$resultado->execute();
while($row = $resultado ->fetch(PDO::FETCH_ASSOC))
{
    var_dump($row);
}