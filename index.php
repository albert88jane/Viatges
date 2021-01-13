<?php

// Si han aceptado la política
if ( isset( $_REQUEST['politica-cookies'] ) ) {
    // Calculamos la caducidad, en este caso un año
    $caducidad = time() + ( 60 * 60 * 24 * 365 );
    // Crea una cookie con la caducidad
    setcookie( 'politica', '1', $caducidad );
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FAST RUMBO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ===  ===  = Header ===  ===  = -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.php">FAST RUMBO</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">INICIO</a></li>
                    <li><a href="#nosotros">Sobre Nosotros</a></li>
                    <li><a href="#experiencias">Experiencias</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav><!-- .nav-menu -->

            <a type="button" data-toggle="modal" data-target="#exampleModal" class="get-started-btn scrollto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                Iniciar Sesion / Registrar
            </a>

        </div>
    </header><!-- End Header -->
    <!-- ===  ===  = Sing In ===  ===  = -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div id="mostrar-y-ocultar">
                        <form action="probes/login_usuario.php" method="POST">
                            <label for="nom">
                                Nombre
                                <input type="text" name="nom" id="nom">
                            </label>
                            <label for="contrasenya">
                                Contraseña
                                <input type="password" name="contrasenya" id="contrasenya">
                            </label>
                            <br>
                            <input class="boton" type="submit" value="Enviar el formulario">

                        </form>
                    </div>
                    <div id="ocultar-y-mostrar">
                        <form action="probes/crea_usuari.php" method="POST">
                            <label for="nom">
                                Nombre
                                <input type="text" name="nom" id="nom">
                            </label>
                            <label for="email">
                                Correo Electronico
                                <input type="email" name="email" id="email">
                            </label>
                            <label for="contrasenya">
                                Contraseña
                                <input type="password" name="contrasenya" id="contrasenya">
                            </label>
                            <br>
                            <input class="boton" type="submit" value="Enviar el formulario">

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="boton" id="ocultar-mostrar" class="btn btn-link">Registrarse</button>
                    <button type="button" class="boton" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sing In-->
    <!-- ===  ===  = Hero Section ===  ===  = -->
    <div>
        <?php if ( !isset( $_REQUEST['politica-cookies'] ) && !isset( $_COOKIE['politica'] ) ): ?>
        <!-- Mensaje de cookies -->
        <div class="cookies">
            <h2>Cookies</h2>
            <p>En FastRumbo utilizamos cookies propias y de terceros para analizar nuestros servicios y mostrarte publicidad relacionada con tus preferencias en base a un perfil elaborado a partir de tus hábitos de navegación ( por ejemplo, páginas visitadas )</p>
            <a class="boton" href="?politica-cookies=1">Aceptar</a>
        </div>
        <?php endif;
        ?>
    </div>
    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="1500">
            <h1>Bienvenidos a Fast Rumbo</h1>
            <h2>Cuentanos tus experiencias sobre tus viajes !!</h2>
            <div class="d-flex">
                <a href="#experiencias" class="btn-get-started scrollto">Experiencias</a>
                <a href="https://www.youtube.com/embed/P7d1H83IcjE?controls=0" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Ver Video <i class="icofont-play-alt-2"></i></a>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ===  ===  = About Section ===  ===  = -->
        <section id="nosotros" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-end">
                    <div class="col-lg-11">
                        <div class="row justify-content-end">

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-simple-smile"></i>
                                    <span data-toggle="counter-up">65</span>
                                    <p>Usuarios</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-document-folder"></i>
                                    <span data-toggle="counter-up">4</span>
                                    <p>Experiencias</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-clock-time"></i>
                                    <span data-toggle="counter-up">2</span>
                                    <p>Años en el sector</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-award"></i>
                                    <span data-toggle="counter-up">1</span>
                                    <p>Premios</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                        <img src="assets/img/paisaje.jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/embed/P7d1H83IcjE?controls=0" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <h3>Información sobre FastRumbo.</h3>
                        <p class="font-italic">
                            En esta pagina podrás encontrar múltiples experiencias de nuestra comunidad de usuarios.
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> Podrás ayudar a otros usuarios a conocer lugares.</li>
                            <li><i class="bx bx-check-double"></i> Podrás compartir tus experiencias desde cualquier lugar.</li>
                            <li><i class="bx bx-check-double"></i> Podrás opinar sobre las experiencias de la comunidad.</li>
                        </ul>
                        <p>
                            Para unirte a nuestra comunidad solo tendrás que crear una cuenta, y a partir de ahí ya podrás disfrutar de contar tus experiencias a la comunidad
                            sobre los sitios tan increíbles que has visitado.
                            <br>
                            Contra mayor sea la comunidad de usuarios mas sitios podremos descubrir.
                            <br><br>
                            <strong>ÚNETE SERÁ DIVERTIDO !!</strong>
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ===  ===  = About Boxes Section ===  ===  = -->
        <section id="experiencias" class="about-boxes">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Fotos</h2>
                    <p>Aquestes son les fotos de les vostres experiencies!</p>
                </div>

                <div class="search">
                    <input type="text" id="busqueda" placeholder="Buscar ...">
                    <i class="glyphicon glyphicon-search"></i>
                </div>

                <div id="experiencies">
                    
                </div>
            </div>

        </section><!-- End About Boxes Section --> 

        <!-- ===  ===  = Contact Section ===  ===  = -->
        <section id="contacto" class="contact">
            <div class="container" data-aos="fade-up">

                <div class=" section-title">
                    <h2>Contacte</h2>
                    <p>Contacta amb nosaltres</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>La nostra adreça:</h3>
                                    <p> Av. d'Esplugues, 36<br>
                                        08034 Barcelona</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email</h3>
                                    <p>info@fastrumbo.com<br>contacte@fastrumbo.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Telèfon</h3>
                                    <p>+34 933 789 152<br>+34 933 730 517</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-5 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:2" data-msg="Introduce un nombre por favor..." />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-7 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Por favor inserte un email correcto..." />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor inserte un asunto.." />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Explica..." placeholder="Mensaje..."></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">
                                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_NEA1lt.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                                </div>
                                <div class="error-message"></div>
                                <div class="sent-message">El teu missatge ha sigut enviat. Gracies!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar missatge</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-5">
                        <div class="footer-info">
                            <h3>FAST RUMBO</h3>
                            <p>
                                Av. d'Esplugues, 36<br>
                                08034 Barcelona<br><br>
                                <strong>Telefono:</strong> +34 933 789 152<br>
                                <strong>Email:</strong> info@fastrumbo.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2 footer-links">

                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li class="active"><i class="bx bx-chevron-right"></i><a href="#">Inicio</a></li>
                            <li><a href="#nosotros"><i class="bx bx-chevron-right"></i>Sobre Nosotros</a></li>
                            <li><a href="#experiencias"><i class="bx bx-chevron-right"></i>Experiencias</a></li>
                            <li><a href="#equipo"><i class="bx bx-chevron-right"></i>Equipo</a></li>
                            <li><a href="#contacto"><i class="bx bx-chevron-right"></i>Contacto</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-1 col-md-32 footer-links">

                    </div>

                    <div class="col-lg-4 col-md-5 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy;
                Copyright <strong><span>FAST RUMBO</span></strong>. Todos los derechos Reservados.
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
                Designed by <a href="#">Grupo 7</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader">
        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_NEA1lt.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/axios.js"></script>

</body>

</html>
