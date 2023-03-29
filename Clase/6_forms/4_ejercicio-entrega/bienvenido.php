<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Bienvenido</title>
</head>
<body>
    <fieldset>
        <legend>Datos</legend>
        <div id="divWelcome">
            <p>Bienvenido</p>
            <?php
            //meto los datos pasador por url en una variable
            $nombreUsuario = $_GET["Nombre"];
            $hobbiesUsuario = $_GET["hobbies"];
            //saco los datos por pantalla
            echo("
            <div>
            <ul> Nombre del usuario: $nombreUsuario
                <li>Hobbies: $hobbiesUsuario</li>
            </ul>
            </div>");
            if ($nombreUsuario == "Siro") {
                echo'<img src="siro.gif">';
            }elseif ($nombreUsuario == "Tizziano") {
                echo'<img src="tizziano.gif">';
            }elseif ($nombreUsuario == "Hugo") {
                echo'<img src="hugo.gif">';
            }
            ?>
        </div>
    </fieldset>
</body>
</html>

