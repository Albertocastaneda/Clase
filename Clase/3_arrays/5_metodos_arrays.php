<?php

$listaCompra = ["pan","cafe","cereales","huevos","leche"];
array_pop($listaCompra);
array_push($listaCompra, "lechuga");

array_shift($listaCompra);
array_unshift($listaCompra,"galletonga");
array_splice($listaCompra, 0,3);

print_r($listaCompra);

?>

<ul>
    <?php
    foreach ($listaCompra as $item) {
        echo "<li>$item</li>";
    }
    ?>

</ul>