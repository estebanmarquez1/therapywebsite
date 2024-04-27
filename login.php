<?php

require 'includes/config/database.php';
//Conect the database
$db = conectarDB();


//If something is wrong
$wrong = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try{
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $wrong[] = "Email is required or invalid";
        }
        
        if(!$password) {
            $wrong[] = "Password is required or invalid";
        }

        if(empty($wrong)){
            $query = "SELECT * FROM users WHERE email = '$email'";
            
            $consult = mysqli_query($db, $query);

            

            if($consult->num_rows){
                $user = mysqli_fetch_assoc($consult);
                //Verify the password
                $auth = password_verify($password, $user['password']);
               
                if($auth){
                    //El usuario está autenticado
                   session_start();
                   $_SESSION['user'] = $user['email'];
                   $_SESSION['login'] = true;

                    header('Location: housekeeping/blog/create.php');
                   } else {
                    $wrong[] = "The password is wrong.";
                   }



            } else {
                $wrong[] = "User doesn't exist.";
            }
            
        }
    }catch(\Throwable $th) {
        echo "<pre>";
        var_dump($th);
        echo "</pre>";
    }
    

}
require 'includes/funciones.php';
    incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
        <h1>Sign in</h1>
        <?php foreach($wrong as $error): ?>
            <div class="alerta error">
                <?php echo $error;?>
            </div>
        <?php endforeach; ?>
        <form class="forms" method="POST" novalidate>

        <fieldset>
                <legend>Sign in</legend>
                
                <label for="email">Email</label>
                <input type="email" placeholder="Your email..." id="email" name="email"/>
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Your password..." name="password"/>
            </fieldset>
            <div class="contenedor-btnCrud">
                <input type="submit" class="btn-violet btn-crud"value="Sign in">
            </div>
            </form>
    </main>


<?php 

incluirTemplate('footer');
?>
