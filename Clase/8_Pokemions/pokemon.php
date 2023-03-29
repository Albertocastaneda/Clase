<?php

$pokemon = [];
$arrayPokemonAPI = [];
$pokemonsCompletos = [];
$minimo = 1;
$maximo = 900;
// funcion de dar color No funciona
function colorTipos($pokemon){
    global $tiposPokemon;
    $tiposPokemon = $pokemon["types"];
    switch ($tiposPokemon[0]["type"]["name"]) {
        case 'water':
            $color = "#3b83bd";
        break;
        case 'fire':
            $color = "#f80000";
        break;
        case 'grass':
            $color = "#008f39";
        break;
        case 'ground':
            $color = "#7A3800";
        break;
        case 'rock':
            $color = "#804000";
        break;
        case 'electric':
            $color = "#FFFF00";
        break;
        case 'fairy':
            $color = "#FFA2F1";
        break;
        case 'dark':
            $color = "#000000";
        break;
        case 'ghost':
            $color = "#695865";
        break;
        case 'poison':
            $color = "#A924FF";
        break;
        case 'dragon':
            $color = "#ffa500";
        break;
        case 'psychic':
            $color = "#881799";
        break;
        case 'fighting':
            $color = "#734222";
        break;
        case 'flying':
            $color = "#00FFF3";
        break;
        case 'ice':
            $color = "#DBF1FD";
        break;
        case 'bug':
            $color = "#ffc0cb";
        break;
        case 'steel':
            $color = "#474b4e";
        break;
        default:
            $color = "blanco";
            break;
    }
    return $color;
}
//cargar el array con los 4 pokemon
for ($i=0; $i < 4; $i++) { 
    $numsAleatorios = rand($minimo,$maximo);
    $pokemonJSON = file_get_contents("https://pokeapi.co/api/v2/pokemon/$numsAleatorios");
    $pokemon = json_decode($pokemonJSON,true,512,JSON_UNESCAPED_UNICODE);
    array_push($arrayPokemonAPI,$pokemon);
}
// foreach que itera los datos de  los pokemon
foreach ($arrayPokemonAPI as $key => $pokemon) {
    $tipoSimplificado = []; // donde se introduciran los tipos
    $habilidadesSimplificadas = []; // habilidades
    $arrayVidas = []; // vidas
    $imagenesPokemon = $pokemon["sprites"]["front_default"];
    $habilidadesPokemon = $pokemon["abilities"];
    $tiposPokemon = $pokemon["types"];
    $pokemon["name"];
    $statsPokemons = $pokemon["stats"][0];
    
    // sacar las habilidades y las meto en el array
    foreach ($habilidadesPokemon as $key => $habilidades) {
        array_push($habilidadesSimplificadas, $habilidades["ability"]["name"]);
    }
    // sacar los tipos y las meto en el array
    foreach ($tiposPokemon as $key1 => $tipos) {
        array_push($tipoSimplificado, $tipos["type"]["name"]);
        colorTipos($pokemon);
    }
        // meto la vida en el array
     array_push($arrayVidas,$statsPokemons['base_stat']);
        
     

        // array que tiene todos los datos deseados y se meteran en el array final
    $pokemonSimplificado=[
        "Nombre" =>$pokemon["name"],
        "Imagen" =>$imagenesPokemon,
        "Habilidades" =>$habilidadesSimplificadas,
        "Tipos" =>$tipoSimplificado,
        "Vida" => $arrayVidas,
    ];
    // array final con el cual se itera para sacar los distintos datos en las tarjetas pokemon
    array_push($pokemonsCompletos, $pokemonSimplificado);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylos.css">
    <title>Cartas pokemon</title>
</head>
<body>
    <!-- contenedor de las tarjetas para que salgan en linea -->
    <div id="contenedor">
        <!-- div que contiene el foreach que imprime toda la informacion de las tarjetas-->
        <?php foreach ($pokemonsCompletos as $key => $cartas) { ?>
            <div id="tarjeta" style="background-color: <?php $color ?>;">
                <div id="stats">
                    <p> <?php echo("Name: ".$cartas["Nombre"]." HP: ". $cartas["Vida"][0])  ?> </p> 
                </div>
            
                <img src="<?php echo($cartas["Imagen"]) ?>" alt="">
                <p>Abilities:</p>
                <ul>
                    <?php foreach($cartas["Habilidades"] as $a) {
                            echo($a);
                            echo("<br>");
                     } ?>
                </ul>
                <p>Types:</p>
                <p><?php foreach ($cartas["Tipos"] as $key => $tipo) {
                    echo($tipo." ");
                } ?>
                </p>
            </div>
        <?php } ?>
    </div>
</body>
</html>