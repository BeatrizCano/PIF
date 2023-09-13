<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Banco de Libros Fenix</title>
        <link rel="icon" href="assets/icon.png" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Transmite tu conocimiento</span>
                <span class="site-heading-lower">Banco de Libros Fenix</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('template') }}">Inicio</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('about') }}">Sobre Nosotr@s</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('yourBooks') }}">Tus Libros</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('contact') }}">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/books_intro.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Damos una segunda vida a tus viejos libros</span>
                            <span class="section-heading-lower">¡Colabora!</span>
                        </h2>
                        <p class="mb-3">Somos una organización sin ánmio de lucro enfocada a recoger, catalogar y redistribuir libros de segunda mano entre quién más lo necesita. Aceptamos donaciones de empresas, editoriales, asociaciones o particulares.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">¡Sigue leyendo!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Nuestro compromiso</span>
                                <span class="section-heading-lower">Para ti</span>
                            </h2>
                            <p class="mb-0">El Banco de Libros Fenix se ha creado con el objetivo de llevar la cultura a todos los rincones del mundo de manera gratuita. Nuestros equipo colabora de manera desinteresada en esta labor para que este ciclo nunca se detenga. Aprovechamos los recursos que ya existen para cumplir con nuestra misión. ¡Únete a nosotr@s!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Banco de Libros Fenix 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
