<?php
$contador = $_COOKIE["contador"];
if (empty($contador)) {
    setcookie("contador",1);
    header("location:./index.php");
}else {
    setcookie("contador",$_COOKIE["contador"] + 1);
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
    <h1><?php echo("Las veces que has visitado esta pagina es: " .$contador) ?> </h1>
    <form action="./borrarCokies.php" method="post">
        <input type="submit" value="Borrar cookies">
    </form>
</body>
</html>