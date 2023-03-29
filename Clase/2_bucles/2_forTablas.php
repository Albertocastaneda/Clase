<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            define("Tabla", 5);
            for ($i= 0; $i <=10 ; $i++) { 
                echo("<li>". Tabla . " x " . $i . " = ". Tabla* $i. "</li>");
            }
        ?>
    </ul>
</body>
</html>