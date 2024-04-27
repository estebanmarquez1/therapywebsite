<?php 

function conectarDB() {
    $db = mysqli_connect('localhost:3306', 'root', '', 'rocio_crud');

    
    if(!$db) {
        echo("Error, no se pudo conectar");
        exit;
}
    return $db;
}
