<?php
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    
    
        if(!$id) {
            header('Location: /');
        }


//Import the database
require 'includes/funciones.php';
incluirTemplate('header');
require 'includes/config/database.php';
$db = conectarDB();


//Consultar 
$query = "SELECT * FROM workexperience WHERE id = ${id}";

$resultado = mysqli_query($db, $query);

$work = mysqli_fetch_assoc($resultado);





?>
<head>
    <title>Rocío Márquez - <?php echo $work['title'];?></title>
</head>
<main clasS="contenedor seccion contenido-centrado">
<h1><?php echo $work['title'];?></h1>
    <div class="container_moreInfo">
        
        <picture>
            <source srcset="/build/img/<?php echo $work['image']?>.webp" type="image/webp">
            <source srcset="/build/img/<?php echo $work['image']?>.jpg" type="image/jpeg">
            <img loading="lazy" src="/build/img/<?php echo $work['image']?>.jpg" alt="Prueba Imagen">
        </picture>
        <p class="yearsWorked"><?php echo $work['yearsWorked'];?> years worked</p>
        <p class="description"><?php echo $work['description'];?></p>
        
        
    </div>
</main>
<?php

incluirTemplate('footer');
?>

