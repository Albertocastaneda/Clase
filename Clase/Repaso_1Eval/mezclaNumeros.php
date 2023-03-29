<?php

$numero1 = 1234;
$numero2 = 5467;
$arrayMezcla = [];

$array1 = str_split($numero1);
$array2 = str_split($numero2);

for ($i=0; $i < count($array1); $i++) { 
    array_push($arrayMezcla,$array1[$i]);
    array_push($arrayMezcla,$array2[$i]);
}

function mezcla($arrayMezcla,$numero1,$numero2){
    foreach ($arrayMezcla as $key => $value) {
        if ($key % 2 == 0) {
            echo("<span style='background-color: red;'>$value</span>");
        }else{
            echo("<span style='background-color: blue;'>$value</span>");
        }
    }
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
    <span style="background-color: red;">numero 1: <?php echo($numero1) ?></span>
    <span style="background-color: blue;">numero 2: <?php echo($numero2) ?></span>
    <p>mezcla: <?php mezcla($arrayMezcla,$numero1,$numero2) ?></p>
</body>
</html>