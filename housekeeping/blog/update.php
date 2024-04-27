<?php
require '../../includes/funciones.php';
$auth = isAuthenticated();
if(!$auth) {
    header('Location: /');
}


$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /housekeeping');
}
//Database
require '../../includes/config/database.php';
$db = conectarDB();

//Get data from the posts
$consultPost = "SELECT * FROM blog WHERE id = ${id};";
$resultPost = mysqli_query($db, $consultPost);
$post = mysqli_fetch_assoc($resultPost);


$title = $post['title'];
$image = $post['image'];
$description = $post['description'];

//Execute the code after user send the form.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);


    $image = $_FILES['image'];
    if ($image['name']) {
        switch ($image['type']) {
            case 'image/jpeg':
                $extension = "jpg";
                break;
            case 'image/png':
                $extension = "png";
                break;
            case 'image/webp':
                $extension = "webp";
                break;
            default:
                $wrong[] = "The extension of the image is not allowed";
        }
    }

    

    if (!$title) {
        $wrong[] = "You have to add a title";
    }

    if (!$description) {
        $wrong[] = "You have to add a description";
    }

    $size = 1000 * 1000; //Size 1 megaByte

    if ($image['size'] > $size) {
        $wrong[] = "The image is too large, maximum size 1 MB";
    }

    if (empty($wrong)) {


        $locationImages = '../../images/';

        if (!is_dir($locationImages)) { //Verify if the dir exists.
            mkdir($locationImages);
        }

        $imageName = '';

        if ($image['name']) {
            //Eliminar la imagen previa

            unlink($locationImages . $post['image'] . "." . $post['extension']);
            //Generar nombre único para las imágenes
            $imageName = md5(uniqid(rand(), true));
            //Subir la imagen
            move_uploaded_file($image['tmp_name'], $locationImages . $imageName . "." . $extension);
        } else {
            $imageName = $post['image'];
        }

        //Insertar en la base de datos
        try {

            $query = "UPDATE blog SET title = '${title}', image = '${imageName}', description = '${description}', extension = '${extension}' WHERE id = ${id}";  
            $resultadoActualizar = mysqli_query($db, $query);

            if ($resultadoActualizar) {
                header('Location: /housekeeping?result=2');
            }
        } catch (\Throwable $th) {
            echo "<pre>";
            var_dump($th);
            echo "</pre>";
        }
    }
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
<h1>Update</h1>
        <div class="contenedor">
            <a class="btn-violet" href="/housekeeping">Back</a>
        </div>

        <?php foreach($wrong as $mistake):  ?>
        <div class="alerta error">
       <?php echo $mistake;?> 
       </div>
     <?php endforeach;?>

     <form class="forms" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Information about the post</legend>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Title of the post" value="<?php echo $title; ?>">

            <label for="image">Image</label>
            <input type="file" id="image" accept="image/jpeg, image/png, image/webp" name="image">

            <img loading="lazy" class="imagen-small" src="/images/<?php echo $post['image'] . "." . $post['extension'];?>">
            <label for="description">description</label>
            <textarea id="description" name="description" placeholder="Add a description for the post"><?php echo $description; ?></textarea>
        </fieldset>
        <div class="contenedor-btnCrud">

            <input type="submit" value="Update post" class="btn-violet btn-crud">
        </div>
        </form>
<?php
incluirTemplate('footer');
?>