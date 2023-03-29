<?php
require_once("Usuario.php");

// if ($_POST["Email"] == $usuario1->getEmail() && $_POST["Contraseña"] == $usuario1->getContrasea()) {
//     header("Location:bienvenido.php?Nombre=".$registrado["nombre"]."&hobbies=".$registrado["hobbies"]);
// }elseif ($_POST["Email"] == $usuario2->getEmail() && $_POST["Contraseña"] == $usuario2->getContrasea()) {
//     header("Location:bienvenido.php?Nombre=".$registrado["nombre"]."&hobbies=".$registrado["hobbies"]);
// }elseif($_POST["Email"] == $usuario3->getEmail() && $_POST["Contraseña"] == $usuario3->getContrasea()){
//     header("Location:bienvenido.php?Nombre=".$registrado["nombre"]."&hobbies=".$registrado["hobbies"]);
// }

//Bucle que recorre todos los usuarios metidos en el array usuarios
for ($i = 0; $i < count($usuarios); $i++) 
{
    //condicion que comprueba las credenciales y si se cumple redirige a bienvenido
    if(($usuarios[$i]->getEmail() == $_POST["Email"]) && 
    ($_POST["Contraseña"] == $usuarios[$i]->getContrasea()))
    {
        return header("Location:bienvenido.php?Nombre=".$usuarios[$i]->getNombre()."&hobbies=".$usuarios[$i]->getHobbies());
        
    }
}     
//si no se cumplen sale el error 
    header("Location:index.php?error=true");
    
       
   
   


