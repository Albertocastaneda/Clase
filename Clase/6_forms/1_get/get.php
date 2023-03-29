<?php
define("usuario","Pedro");
define("contraseña", 5432154321);
echo("El nombre del usuario es: ");
echo("<br>");
echo($_GET["Nombre"]);
echo("<br>");
echo("Los apellidos del usuario es: ");
echo("<br>");
echo($_GET["Apellidos"]);
echo("<br>");
echo("El email del usuario es: ");
echo("<br>");
echo($_GET["Email"]);
echo("<br>");
echo("La contraseña del usuario es: ");
echo("<br>");
echo($_GET["Contraseña"]);
echo("<br>");
if (empty($_GET["Nombre"]) || empty($_GET["Contraseña"])) {
    // comprueba si la credenciales estan vacias
    echo("Credenciales vacias, introduzca credenciales");
}else{
    // comprueba credenciales
    if ($_GET["Contraseña"] == contraseña && $_GET["Nombre"] == usuario) {
        echo("Bienvenido ".usuario);
    }else{
        echo("Peruano");
    }
}
?>