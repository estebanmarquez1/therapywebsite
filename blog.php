<?php 
//Import the database
require 'includes/funciones.php';
incluirTemplate('header');

require 'includes/config/database.php';
$db = conectarDB();

//Consultar 
$query = "SELECT * FROM blog";

$consult = mysqli_query($db, $query);

// $blog = mysqli_fetch_assoc($resultado);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Art Therapist</title>
</head>
<body>
    <main class="blog">
        <?php while ($post = mysqli_fetch_assoc($consult)):?>
            <div class="contenedor-entrada">
            <article class="entrada-blog">
                <div class="imagen">
                            <img loading="lazy" src="/images/<?php echo $post['image'] . "." . $post['extension']; ?>" alt="<?php echo $post['title']; ?>">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4><?php echo $post['title'];?></h4>
                        <p>Written on <span><?php echo $post['created'];?></span> by: <span>Rocío Márquez</span></p>
                        <p><?php echo $post['description'];?></p>
                    </a>
                </div>
            </article>
        </div>
        
        <?php endwhile;?>
    
    </main>
</body>
</html>
<?php
mysqli_close($db);
incluirTemplate('footer');
?>