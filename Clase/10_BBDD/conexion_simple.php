<?php

$dwes = new PDO("mysql:host=localhost:3306;dbname=dwes","root","");

$resultado = $dwes->query("SELECT * FROM usuarios");

// echo("los resultados encontrados son ".$resultado->rowCount());

foreach ($resultado as $key => $row) {
    echo(" id " .$row["id"]." usuario ".$row["nombre"]." email " .$row["email"]);
}

$resultadoID = $dwes->query("SELECT * FROM usuarios WHERE id>2");
foreach ($resultadoID as $key => $value) {
    print("<pre>".print_r($value,true). "</pre>");
}
$resultadoNombre = $dwes->query("SELECT * FROM usuarios WHERE nombre like '%a%'");
foreach ($resultadoNombre as $key => $value) {
    print("<pre>".print_r($value,true). "</pre>");
}