<?php

// Ejemplo excepcion
// try {
//     $algo = "cosa";
// } catch (Exception $th) {
//     echo $th->getMessage();
// }


$dwes = new PDO("mysql:host=localhost:3306;dbname=dwes","root","");

$dwes-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

try {
    $dwes->beginTransaction();
    $dwes->commit();
} catch (Exception $th) {
    try {
        echo "error en el rollback " .$th->getMessage(); 
        $dwes->rollBack();
    } catch (Exception $th2) {
        echo "el rollback ha fallado ".$th2->getMessage();
    }
}