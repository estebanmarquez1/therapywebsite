<?php 

function conectarDB() {
    $db = mysqli_connect('localhost:3306', 'root', 'Laconic1004@', 'rocio_crud');

    
    if(!$db) {
        echo("Error, no se pudo conectar");
        exit;
}
    return $db;
}
