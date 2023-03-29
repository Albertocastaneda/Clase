<?php

/**
 * 
 * 2. Formularios
 * - Crear una lista iterando el array anterior que muestre todos los alumnos y sus notas.
 * - Crear un formulario que permita seleccionar la asignatura a mostrar de los estudiantes. Utilizar o un select o un grupo de radio-buttons.
 * - Filtrar las asignaturas de manera similar al apartado anterior
 * - Crear un fichero json con los datos de cada alumno
 * - Decodificarlo y mostrar la nota media de cada alumno por pantalla
 * 
 * 
 */
    require_once("1_arrays.php");

    foreach ($notas as $key => $alumnos) { 
        echo("<ol>". $key.
            "<li>"."Nota DWES: " .$alumnos["DWES"] ."</li>".
            "<li>"."Nota DWEC: " .$alumnos["DWEC"] ."</li>".
        "</ol>");
    }
    var_dump($_POST["DWES"]);
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
    <ol>
        <?php foreach ($notas as $key => $alumno) { ?>
            <li></li>
        <?php } ?>
    </ol>
    <form action="2_formulario.php" method="post">
        <input type="radio" id="DWES" name="DWES" value="DWES">
        <label for="DEWS">DEWS</label><br>
        <input type="radio" id="DWEC" name="DWEC" value="DWEC">
        <label for="DWEC">DWEC</label><br>
        <input type="radio" id="TODAS" name="TODAS" value="TODAS">
        <label for="TODAS">Todas</label><br>
        <input type="submit" value="Filtrar">
    </form>
 </body>
 </html>