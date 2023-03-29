<?php

    $juegos = file_get_contents("./juegos.json");
    $juegosArray = $juegos == null ? [] : json_decode($juegos,true,512,JSON_UNESCAPED_UNICODE);
    if (!empty($_POST)) {
    $juegoIntroducido = $_POST; 
    array_push($juegosArray, $juegoIntroducido);
    }
    file_put_contents("./juegos.json",json_encode($juegosArray,JSON_UNESCAPED_UNICODE));
    $vacio = $juegosArray == null ? true : false;
    //var_dump($juegos);
    //echo("<br>");
    //var_dump($juegosArray);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libreriaCSS.css">
    <title>Libreria</title>
</head>
<body>
    <div class="contenedor">
        <?php if ($vacio) { ?>
            <span>No hay juego</span>
        <?php } else{ ?> 
            <?php foreach ($juegosArray as $key => $juego) { ?> 
                
                <div class="juego">
                    <span class="id"><?= $key + 1 ?></span>
                    <span class="tittle"><?= $juego['tittle'] ?></span>
                    <span class="year"><?= $juego['year'] ?></span>
                </div>

            <?php } ?>
        <?php } ?> 
    </div><br>
    <div class="formulario">
        <form action="./libreriaClase.php" method="post">
            <label for="tittle">Tittle:</label>
            <input type="text"  id="tittle" name="tittle" required>
            <label for="year">Year:</label>
            <input type="text" id="year" name="year" required>
            <input type="submit" value="Enviar" class="button-submit">
        </form>
    </div>
</body>
</html>