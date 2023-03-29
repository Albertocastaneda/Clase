<?php

$dwes = new PDO("mysql:host=localhost:3306;dbname=dwes","root","");
//  $resultado = $dwes->query("INSERT INTO usuarios(nombre,email,pass,direccion,tarjeta_credito)
//  VALUES ('guillermo','guillermo@mail.com','2543452','casaGuillermo','12345345'),
//  ('marcos','marcos@mail.com','236464','casaMarcos','146765434'),
//  ('adrian','adrian@mail.com','5654678','casaAdrian','65765855');");
$resultado2 = $dwes->query("UPDATE usuarios SET nombre = 'manolo', email = 'manolo@mail.com' WHERE id = 13;");