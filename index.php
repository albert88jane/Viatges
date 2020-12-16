<?php

// Si han aceptado la política
if(isset($_REQUEST['politica-cookies'])) {
    // Calculamos la caducidad, en este caso un año
    $caducidad = time() + (60 * 60 * 24 * 365);
    // Crea una cookie con la caducidad
    setcookie('politica', '1', $caducidad);
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      
      <h1 class="logo"><a href="index.php">FAST RUMBO</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">INICIO</a></li>
          <li><a href="#nosotros">Sobre Nosotros</a></li>
          <li><a href="#experiencias">Experiencias</a></li>
          <li><a href="#equipo">Equipo</a></li>
          <li><a href="#contacto">Contacto</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a type="button" data-toggle="modal" data-target="#exampleModal" class="get-started-btn scrollto">Iniciar Sesion / Registrar</a>

    </div>
  </header><!-- End Header -->
  <!-- ======= Sing In ======= -->
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
  <!-- ======= Hero Section ======= -->
  <div>
      <?php if (!isset($_REQUEST['politica-cookies']) && !isset($_COOKIE['politica'])): ?>
           <!-- Mensaje de cookies -->
          <div class="cookies">
            <h2>Cookies</h2>
            <p>En FastRumbo utilizamos cookies propias y de terceros para analizar nuestros servicios y mostrarte publicidad relacionada con tus preferencias en base a un perfil elaborado a partir de tus hábitos de navegación (por ejemplo, páginas visitadas)</p>
            <a class="boton" href="?politica-cookies=1">Aceptar</a>
          </div>
      <?php endif; ?>
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

    <!-- ======= About Section ======= -->
    <section id="nosotros" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-simple-smile"></i>
                  <span data-toggle="counter-up">65</span>
                  <p>Happy Clients</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-document-folder"></i>
                  <span data-toggle="counter-up">85</span>
                  <p>Projects</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up">12</span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">15</span>
                  <p>Awards</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bx bx-check-double"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
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

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch filter-app" data-aos="fade-up" data-aos-delay="100" title="App 1">
            <div class="card">
              <img src="assets/img/about-boxes-1.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/about-boxes-2.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-calendar-check-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/about-boxes-3.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Vision</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/about-boxes-1.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/about-boxes-2.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-calendar-check-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/about-boxes-3.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Vision</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Boxes Section -->


    <!-- ======= Team Section ======= -->
    <section id="equipo" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equip</h2>
          <p>Aquests som nosaltres</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contacto" class="contact">
      <div class="container" data-aos="fade-up"">

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
                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_NEA1lt.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;" loop autoplay></lottie-player>
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
        &copy; Copyright <strong><span>FAST RUMBO</span></strong>. Todos los derechos Reservados.
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
    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_NEA1lt.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>
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