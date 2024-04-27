<?php
require '../includes/funciones.php';
session_start();
$auth = isAuthenticated();


if(!$auth) {
    header('Location: /login.php');
}

//Import the conection
require '../includes/config/database.php';
$db = conectarDB();

//Query to consult the database
$query = "SELECT * FROM blog";

//Consult the database
$consult = mysqli_query($db, $query);


//Shows the conditional message
$result = $_GET['result'] ?? null;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id) {
        $queryConsulta = "SELECT * FROM blog WHERE id = ${id}";
        $consulta = mysqli_query($db, $queryConsulta);
        $consultaFinal = mysqli_fetch_assoc($consulta);

        //Delete the image file
        $query = "SELECT image FROM blog WHERE id = ${id}";
        $resultImagePost = mysqli_query($db, $query);
        $post = mysqli_fetch_assoc($resultImagePost);

        unlink('../images/' . $post['image'] . "." . $consultaFinal['extension']);
       
        //Delete the post 
        $query = "DELETE FROM blog WHERE id = ${id}";
        var_dump($query);
        $resultQuery = mysqli_query($db, $query);
        
        if($resultQuery) {
            header('Location: /housekeeping?result=3');
        }
    }
}

incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>Blog Post Administrator</h1>
    <?php if (intval($result) === 1) : ?>
        <p class="alerta exito">Post created successfully</p>
    <?php elseif(intval($result) === 2): ?>
        <p class="alerta exito">Post updated successfully</p>
    <?php elseif(intval($result) === 3): ?>
        <p class="alerta exito">Post deleted successfully</p>
    <?php endif; ?>
    <div class="botones-crud">
        <a href="/housekeeping/blog/create.php" class="btn-violet btn-crud">Create</a>
    </div>

    <table class="post">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($post = mysqli_fetch_assoc($consult)): ?>
                <tr>
                    <td><?php echo $post['id'];?></td>
                    <td><?php echo $post['title'];?></td>
                    <td>

                        <img loading="lazy" class="imagen-tabla" src="/images/<?php echo $post['image'] . "." . $post['extension'];?>">
                    </td>
                   
                    <td><div class="description">
                            <?php echo $post['description'];?>
                        </div> </td>

                    <td>

                        <form method="POST" class="w-100">
                        <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                        <input type="submit"  class="btn-rojo-block" value="Delete">
                        </form>
                        <a href="housekeeping/blog/update.php?id=<?php echo $post['id'];?>" class="btn-verde-block">Update</a>

                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</main>

<?php

//Cerrar la conexión
incluirTemplate('footer');
mysqli_close($db);

?>