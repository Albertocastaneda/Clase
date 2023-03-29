<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons</title>
    <link rel="stylesheet" href="./pokeapi.css">
</head>
<body>
    <header>
        <p>""</p>
    </header>
    <div class="fondo">

        <?php

/*Generar 4 números aleatorios entre 1 y 900.
Hacer 4 llamadas a la pokeapi a la siguiente url: 
https://pokeapi.co/api/v2/pokemon/${id} donde ${id} 
hay que sustituirlo por cada número aleatorio generado.
Almacenar cada llamada en una variable y a su vez generar
un array de pokemons.

Iterar sobre el array de pokemons y crear 4 cartas pokemon con:
Foto
Nombre del pokemon
Tipo -> con letras y el fondo de la carta 
(rojo si es tipo fuego, amarillo, azul o verde)
vida del pokemon*/

//array de  4 ids aleatorios 
$ids = [];

//array en el que se guardaran los pokemons
$pokemonArray = [];

//ocntador el cual se utilizara para los bucles
$contador;

//bucle el cual saca 4 valores aleatorios y se meten en el array ids
for($i=0; $i<4; $i++){
    $ids[$i] = rand(1,900);
}

//url de la api
for($i=0; $i<4; $i++){
    $pokemonJSON = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . $ids[$i]);
    $pokemon = json_decode($pokemonJSON, true, 512, JSON_UNESCAPED_UNICODE);
    $pokemonArray[$i]=$pokemon;
}

// var_dump($pokemonArray[0]);

// print("<pre>" . print_r(count($pokemonArray[0]), true) . "</pre>");
?>

<div id="container_tarjetas">
<?php
//blucle el cual imprimirá todas las cartas pokemon
foreach ($pokemonArray as $key => $datos_pokemons) {
    
//Div en el que se almacena cada pokemon
?> <div id="tarjeta"> <?php
//NOMBRE POKEMON
$nombre = $datos_pokemons["name"];
echo "<h1>$nombre</h1>";

//COLOR DE LA TARJETA DEPENDIENDO DEL TIPO DE POKEMON

$distintos_tipos = $datos_pokemons["types"];

foreach ($distintos_tipos as $key => $tipo) {
    echo $tipo["type"]["name"];
}

//FOTO DEL POKEMON
$url = $datos_pokemons["sprites"]["other"]["home"]["front_default"];
echo '<img src=" ' . $url . '"/>';
echo "<br><br>";


//HABILIDADES POKEMON
$habilidades =  $datos_pokemons["abilities"];
echo"<br>";

foreach ($habilidades as $key => $habilidad) {
    echo $habilidad["ability"]["name"];
    echo"<br>";
}

//VIDA DEL POKEMON
foreach ($pokemonArray as $key => $pokemon) {
    foreach ($pokemon['stats'] as $key=>$element) {
        if($element['stat']['name']=="hp"){ ?>
            <span class="hp">HP:<?= $element["base_stat"] ?></span>
        <?php }
     } 
    }






?>
 </div> 
 <?php
}
?>
</div>
</div>

</body>
</html>