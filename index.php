<?php
require 'includes/config/database.php';
$db = conectarDB();
$query = "SELECT * FROM blog";

$consult = mysqli_query($db, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocío Márquez - Therapist</title>
    <meta name="description" content="Welcome to the personal website of Rocío! Here, you will be able to learn about her work experience as a Therapist and the Art Therapy program she has developed. This program is a powerful non-verbal tool, and can be a useful tool for doctors, teachers, social workers, and more professionals who want to help their clients in a range of different circumstances, such as addictions, abuse, alcoholism, trauma, low self-esteem, relationships, and more.">
    <meta name="keywords" content="Rocío, Therapist, Art Therapy Program, Non-Verbal Tool, Doctors, Teachers, Social Workers, Addictions, Abuse, Alcoholism, Trauma, Low Self-Esteem, Relationships">
    <link rel="stylesheet" href="build/css/app.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="build/img/favicon.ico" />
</head>

<body>
    <header class="header">
        <div class="contenedorNav contenedor contenido-header">
            <a href="/">
                <div class="imageContainer">
                    <picture>
                        <source srcset="build/img/faviconRocio.webp" type="image/webp">
                        <source srcset="build/img/faviconRocio.png" type="image/png">
                        <img src="build/img/faviconRocio.png" alt="Logo Rocio">
                    </picture>
                </div>
            </a>
            <div class="mobile-menu">
                <img src="build/img/barras.svg" alt="Mobile Menu Icon">

            </div>


            <nav class="main-nav">

                <a class="nav-style" href="#home">
                    <div class="enlace">
                        <picture>
                            <source srcset="build/img/homeLogo.webp" type="image/webp">
                            <source srcset="build/img/homeLogo.png" type="image/png">
                            <img src="build/img/homeLogo.png" alt="Home Image Navigation">
                        </picture>
                        <p>Home</p>
                    </div>
                </a>
                <a class="nav-style" href="#aboutMe">
                    <div class="enlace" style="white-space: nowrap;">
                        <picture>
                            <source srcset="build/img/aboutMeIcon.webp" type="image/webp">
                            <source srcset="build/img/aboutMeIcon.png" type="image/png">
                            <img src="build/img/aboutMeIcon.png" alt="About Me Icon Navigation">
                        </picture>
                        <p>About me</p>
                    </div>
                </a>
                <a class="nav-style" href="#blog">
                    <div class="enlace">
                        <picture>
                            <source srcset="build/img/blogLogo.webp" type="image/webp">
                            <source srcset="build/img/blogLogo.png" type="image/png">
                            <img src="build/img/blogLogo.png" alt="Blog Image Navigation">
                        </picture>
                        <p>Blog</p>
                    </div>
                </a>
                <a class="nav-style" href="#contact">
                    <div class="enlace">
                        <picture>
                            <source srcset="build/img/contactLogo.webp" type="image/webp">
                            <source srcset="build/img/contactLogo.png" type="image/png">
                            <img src="build/img/contactLogo.png" alt="Contact Image Navigation">
                        </picture>
                        <p>Contact</p>
                    </div>
                </a>

            </nav>

        </div>
    </header>

    <section id="home" class="home">
        <h1>Rocío Márquez</h1>
        <h2>Art Therapy Work</h2>
        <div class="content-home">
            <div class="div-image">
                <picture>
                    <source srcset="build/img/header2.webp" type="image/webp">
                    <source srcset="build/img/header2.jpeg" type="image/jpeg">
                    <img class="image-home" loading="lazy" src="build/img/header2.jpeg" alt="Imagen Rocío">
                </picture>
            </div>
            <div class="content-information">
                <p>Hello <span class="animation">I'm Rocío</span>. It's a pleasure to have you here in my personal website.
                </p>
                <p>Let me show you my work experience as a <span class="animation">Therapist</span>.</p>
                <div class="work-experience">
                    <h3>Work Experience</h3>
                    <div class="container">


                        <input type="radio" name="slider" class="d-none" id="s1" checked>
                        <input type="radio" name="slider" class="d-none" id="s2">
                        <input type="radio" name="slider" class="d-none" id="s3">
                        <input type="radio" name="slider" class="d-none" id="s4">
                        <input type="radio" name="slider" class="d-none" id="s5">

                        <div class="cards">
                            <label for="s1" id="slide1">
                        <div class="card">
                          <div class="image">
                            <picture>
                                <source srcset="build/img/card1.webp" type="image/webp">
                                <source srcset="build/img/card1.jpeg" type="image/jpeg">
                                <img loading="lazy" src="build/img/card1.jpeg" alt="Art Therapist Image">
                            </picture>
                            
                            <div class="dots">
                              <div class="dot1"></div>
                            </div>
                          </div>
                          <div class="infos">
                            <span class="name">Art Therapist</span>
                            <span class="lorem">Lorem ipsum dolor, sit amet let kar adipiscing. Aenean vel velit sit ansd . Nullam lorem. Nulla karma stellus</span>
                          </div>
                          <a href="workInfo.php?id=1" class="btn-contact">More info</a>
                        </div>
                      </label>

                            <label for="s2" id="slide2">
                        <div class="card">
                          <div class="image">
                            <picture>
                                <source srcset="build/img/card2.webp" type="image/webp">
                                <source srcset="build/img/card2.jpg" type="image/jpeg">
                                <img loading="lazy" src="build/img/card2.jpg" alt="Social Service Worker Image">
                            </picture>
                            <div class="dots">
                              <div class="dot1"></div>
                            </div>
                          </div>
                          <div class="infos">
                            <span class="name">Social Service Worker</span>
                            <span class="lorem">Lorem ipsum dolor, sit amet let kar adipiscing. Aenean vel velit sit ansd . Nullam lorem. Nulla karma stellus</span>
                          </div>
                          <a href="/workInfo.php?id=2" class="btn-contact">More info</a>
                        </div>
                      </label>

                            <label for="s3" id="slide3">
                        <div class="card">
                          <div class="image">
                            <picture>
                                <source srcset="build/img/card3.webp" type="image/webp">
                                <source srcset="build/img/card3.jpg" type="image/jpeg">
                                <img loading="lazy" src="build/img/card3.jpg" alt="School Counselor Image">
                            </picture>
                            <div class="dots">
                              <div class="dot1"></div>
                            </div>
                          </div>
                          <div class="infos">
                            <span class="name">School Counselor</span>
                            <span class="lorem">Lorem ipsum dolor, sit amet let kar adipiscing. Aenean vel velit sit ansd . Nullam lorem. Nulla karma stellus</span>
                          </div>
                          <a href="/workInfo.php?id=3" class="btn-contact">More info</a>
                        </div>
                      </label>

                            <label for="s4" id="slide4">
                        <div class="card">
                          <div class="image">
                            <picture>
                                <source srcset="build/img/card4.webp" type="image/webp">
                                <source srcset="build/img/card4.jpg" type="image/jpeg">
                                <img loading="lazy" src="build/img/card4.jpg" alt="Healing Touch Therapy Image">
                            </picture>
                            <div class="dots">
                              <div class="dot1"></div>
                            </div>
                          </div>
                          <div class="infos">
                            <span class="name">Healing Touch Therapy</span>
                            <span class="lorem">Lorem ipsum dolor, sit amet let kar adipiscing. Aenean vel velit sit ansd . Nullam lorem. Nulla karma stellus</span>
                          </div>
                          <a href="/workInfo.php?id=4" class="btn-contact">More info</a>
                        </div>
                      </label>

                            <label for="s5" id="slide5">
                        <div class="card">
                          <div class="image">
                            <picture>
                                <source srcset="build/img/card5.webp" type="image/webp">
                                <source srcset="build/img/card5.jpg" type="image/jpeg">
                                <img src="build/img/card5.webp" alt="Addiction Therapist Image">
                            </picture>
                            <div class="dots">
                              <div class="dot1"></div>
                            </div>
                          </div>
                          <div class="infos">
                            <span class="name">Addiction Therapist</span>
                            <span class="lorem">Lorem ipsum dolor, sit amet let kar adipiscing. Aenean vel velit sit ansd . Nullam lorem. Nulla karma stellus</span>
                          </div>
                          <a href="/workInfo.php?id=5" class="btn-contact">More info</a>
                        </div>
                      </label>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="aboutMe" clasS="aboutMe">
        <h2>About me</h2>
        <div class="inner">
            <div class="tablaEstudios">
                <h1>Studies and Certificates</h1>
                <table>
                    <tr>
                        <th>Study</th>
                        <th>Certificates</th>
                        <th>Date</th>
                    </tr>
                    <tr>
                        <td>Bachelor's of Social Work</td>
                        <td>
                            <ul>
                                <li>Certificate of xx</li>
                                <li>Certificate of xx</li>
                                <li>Certificate of xx</li>
                                <li>Certificate of xx</li>
                                <li>Certificate of xx</li>
                                <li>Certificate of xx</li>
                                <li>Certificate of xx</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>dd/mm/yyyy</li>
                                <li>dd/mm/yyyy</li>
                                <li>dd/mm/yyyy</li>
                                <li>dd/mm/yyyy</li>
                                <li>dd/mm/yyyy</li>
                                <li>dd/mm/yyyy</li>
                                <li>dd/mm/yyyy</li>
                            </ul>
                        </td>
                    </tr>

                </table>
            </div>
    </section>

    <section id="myBook" class="myBook">
        <h2>My book</h2>
        <div class="contenedorLibro">
            <div class="imageBook">

                <div class="flipcard">
                    <div class="flipcard-inner">
                        <div class="flipcard-front">
                            <picture>
                                <source srcset="build/img/portadaFrontal.webp" type="image/webp">
                                <source srcset="build/img/portadaFrontal.jpg" type="image/jpeg">
                                <img src="build/img/portadaFrontal.jpg" alt="Portada Frontal Libro" />
                            </picture>
                        </div>
                        <div class="flipcard-back">
                            <picture>
                                <source srcset="build/img/portadaTrasera.webp" type="image/webp">
                                <source srcset="build/img/portadaTrasera.jpg" type="image/jpeg">
                                <img src="build/img/portadaTrasera.jpg" alt="Portada Trasera Libro" />
                            </picture>
                        </div>

                    </div>

                </div>
                <div class="divAdviser">
                    <p class="adviser">Click to scale the image.</p>
                </div>

            </div>
            <div class="descriptionBook">
                <p>This Art Therapy program was developed based on the need to identify strong feelings and wounds many times carrying them on since childhood, as well as further experiences through their lives. This workbook is a powerful non-verbal tool
                    where each session is equivalent to a therapy session. This program is a useful tool for doctors, teachers, social workers, and more professionals who want to help their clients in a range of different circumstances (addictions, abuse,
                    alcoholism, trauma, low self-esteem, relationships, and more). Having the opportunity to work with their clients to identify themselves, express and verbalize feelings and emotions, throughout the art done by themselves, leading them
                    to get their own conclusions and allowing them to make healthy decisions for themselves, improving their self-esteem by working with these 10 Art Therapy sessions.</p>
            </div>
        </div>
        <div class="contenedor-btn">
            <a href="https://www.amazon.com/Therapy-Program-Programa-Arte-Terapia-ebook/dp/B0BFBVR9LV/">
                <div class="btn-comprar">
                    <p>Buy on Amazon</p>
                    <picture>
                        <source srcset="build/img/amazonIcon.webp" type="image/webp">
                        <source srcset="build/img/amazonIcon.png" type="image/png">
                        <img src="build/img/amazonIcon.png" alt="Amazon Icon Shop">
                    </picture>
                </div>
            </a>
        </div>

    </section>

    <section id="blog" class="blog">
        <h2>Blog</h2>
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
    </section>

    <section id="contact" class="contact">
        <h2>Please give me some information to contact you</h2>
        <form method="POST" class="form">
            <div class="contactContainer">
                <fieldset>
                    <legend>Contact information</legend>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name..." />
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email..." />
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Type your message..."></textarea>
                    <input type="submit" class="btn-send-contact" value="Send">
                </fieldset>
            </div>

        </form>
    </section>

    <footer class="footer">
        <p>All rights reserved to respective authors.</p>
    </footer>
    <script src="build/js/bundle.min.js"></script>
</body>

</html>