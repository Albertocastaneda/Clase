<?php

echo("El usuario es: ".$_POST["Nombre"]);
echo("<br>");
echo("Los apellidos son: ".$_POST["Apellidos"]);
echo("<br>");
echo("El Email es: ".$_POST["Email"]);
echo("<br>");
echo("La contraseña es: ".$_POST["Contraseña"]);
echo("<br>");
echo("El departamento selecionado es: ".$_POST["Departamentos"]);
echo("<br>");
echo("Los comentarios son: ".$_POST["texto"]);
echo("<br>");
echo("El tipo de cliente seleccionado:" .$_POST["Clientes"]);
echo("<br>");
echo("Condiciones: ".$_POST["condiciones"]);

//$pagina = $_POST["Clientes"]=="VIP"?"cliente.vip.html"

//header("Location:$pagina");

?>