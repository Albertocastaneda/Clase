<?php
function par_impar($numero){
    if ($numero % 2 == 0) {
        echo("numero par");
    }else {
        echo("numero impar");
    }
}
if (!empty($_POST["numero"])) {
    $numero_enviado = $_POST["numero"];
    par_impar($numero_enviado);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="par_impar.php" method="post">
        <input type="number" name="numero">
        <label for="numero">Numero</label><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>