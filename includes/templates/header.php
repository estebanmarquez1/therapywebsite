<?php
if(!isset($_SESSION)){
    session_start();
}

$auth = $_SESSION['login'] ?? false;






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the personal website of Rocío! Here, you will be able to learn about her work experience as a Therapist and the Art Therapy program she has developed. This program is a powerful non-verbal tool, and can be a useful tool for doctors, teachers, social workers, and more professionals who want to help their clients in a range of different circumstances, such as addictions, abuse, alcoholism, trauma, low self-esteem, relationships, and more.">
    <meta name="keywords" content="Rocío, Therapist, Art Therapy Program, Non-Verbal Tool, Doctors, Teachers, Social Workers, Addictions, Abuse, Alcoholism, Trauma, Low Self-Esteem, Relationships">
    <link rel="stylesheet" href="/build/css/app.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/build/img/favicon.ico" />
</head>

<body>
    <header class="header">
        <div class="contenedorNav contenedor contenido-header">

            <a href="/">
                <div class="imageContainer">
                    <picture>
                        <source srcset="/build/img/faviconRocio.webp" type="image/webp">
                        <source srcset="/build/img/faviconRocio.png" type="image/png">
                        <img src="/build/img/faviconRocio.png" alt="Logo Rocio">
                    </picture>
                </div>
            </a>
            <div class="mobile-menu">
                <img src="/build/img/barras.svg" alt="Mobile Menu Icon">

            </div>


            <nav class="main-nav">

                <a class="nav-style" href="/">
                    <div class="enlace">
                        <picture>
                            <source srcset="/build/img/homeLogo.webp" type="image/webp">
                            <source srcset="/build/img/homeLogo.png" type="image/png">
                            <img src="/build/img/homeLogo.png" alt="Home Image Navigation">
                        </picture>
                        <p>Home</p>
                    </div>
                </a>
                <a class="nav-style" href="/#aboutMe">
                    <div class="enlace" style="white-space: nowrap;">
                        <picture>
                            <source srcset="/build/img/aboutMeIcon.webp" type="image/webp">
                            <source srcset="/build/img/aboutMeIcon.png" type="image/png">
                            <img src="/build/img/aboutMeIcon.png" alt="About Me Icon Navigation">
                        </picture>
                        <p>About me</p>
                    </div>
                </a>
                <a class="nav-style" href="/blog.php">
                    <div class="enlace">
                        <picture>
                            <source srcset="/build/img/blogLogo.webp" type="image/webp">
                            <source srcset="/build/img/blogLogo.png" type="image/png">
                            <img src="/build/img/blogLogo.png" alt="Blog Image Navigation">
                        </picture>
                        <p>Blog</p>
                    </div>
                </a>
                <a class="nav-style" href="/#contact">
                    <div class="enlace">
                        <picture>
                            <source srcset="/build/img/contactLogo.webp" type="image/webp">
                            <source srcset="/build/img/contactLogo.png" type="image/png">
                            <img src="/build/img/contactLogo.png" alt="Contact Image Navigation">
                        </picture>
                        <p>Contact</p>
                    </div>
                </a>
                <?php if($auth): ?>
                    <a class="nav-style" href="/#contact">
                    <div class="enlace" style="white-space: nowrap;">
                        <picture>
                            <source srcset="/build/img/logoutIcon.webp" type="image/webp">
                            <source srcset="/build/img/logoutIcon.png" type="image/png">
                            <img src="/build/img/logoutIcon.png" alt="Log out Image Navigation">
                        </picture>
                        <p>Log out</p>
                    </div>
                </a>
                    <?php endif; ?>
              
            </nav>

        </div>
    </header>