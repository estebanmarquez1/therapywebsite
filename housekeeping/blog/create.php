<?php
require '../../includes/funciones.php';

$auth = isAuthenticated();
session_start();
if(!$auth) {
    header('Location: /');
}
require '../../includes/config/database.php';
//Conect the database
$db = conectarDB();

//Wrong
$wrong = [];

$title = '';
$image = '';
$description = '';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Information about the blog post.
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    //Date of uploaded
    $created = date('Y/m/d');

    $image = $_FILES['image'];

    switch($image['type']){
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
    

    // Size of the image (1 MB max)
    $size = 1000 * 1000; //Size 1 megaByte

    if (!$title) {
        $wrong[] = "You have to add a title.";
    }
    
    if (strlen($description) < 50) {
        $wrong[] = "Description is required and must be at least 50 characters long.";
    }
    
    if (!$image) {
        $wrong[] = "You have to upload an image for the blog post.";
    }
    if ($image['size'] > $size) {
        $wrong[] = "The image is too large, maximum size 1 MB";
    }
    

    if (empty($wrong)) {
        /**Upload files */

        $locationImages = '../../images/';

        if (!is_dir($locationImages)) { //Verify if the dir exists.
            mkdir($locationImages);
        }

        //Generate an unique name for the images
        $imageName = md5(uniqid(rand(), true));

        //Upload the image
        move_uploaded_file($image['tmp_name'], $locationImages . $imageName . "." . $extension);
    }

    try {
        $queryInsertPost = "INSERT INTO blog (title, image, description, extension,  created) VALUES ('$title', '$imageName', '$description', '$extension', '$created')";
        
        $insertPost = mysqli_query($db, $queryInsertPost);

        if($insertPost){
            header('Location: /housekeeping?result=1');
        }
    }
    catch (\Throwable $th) {
        echo "<pre>";
        var_dump($th);
        echo "</pre>";

    } 
    
    
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
<h1>Create</h1>
  <div class="contenedor">
            <a class="btn-violet" href="/housekeeping">Back</a>
        </div>
       <?php foreach($wrong as $mistake):  ?>
        <div class="alerta error">
       <?php echo $mistake; ?> 
         </div>
     <?php endforeach;?>
        <form class="forms" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Information about the post</legend>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Title of the post" value="<?php echo $title; ?>">

            <label for="image">Image</label>
            <input type="file" id="image" accept="image/jpeg, image/png, image/webp" name="image">

            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Add a description for the post"><?php echo $description; ?></textarea>
        </fieldset>
        <div class="contenedor-btnCrud">

            <input type="submit" value="Create post" class="btn-violet btn-crud">
        </div>
        </form>


</main>
<?php
incluirTemplate('footer');
?>