<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Banco de Libros Fénix</title>
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
                <span class="site-heading-upper text-primary mb-3">¿Quieres conocernos un poco más?</span>
                <span class="site-heading-lower">Banco de Libros Fénix</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Banco de Libros Fénix</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('template') }}">Inicio</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('about') }}">Sobre Nosotr@s</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('yourBooks') }}">Tus Libros</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('contact') }}">Contacto</a></li>
                        @guest
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('login') }}">Iniciar Sesión</a></li>
                    @else
                        <li class="nav-item px-lg-4">
                        <form action="{{ route('logout') }}" method="POST" class="nav-item px-lg-4">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link text-uppercase">Cerrar sesión</button>
                        </form>
                        </li>
                    @endguest
                    
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Libros de texto, novelas, comics...</span>
                                    <span class="section-heading-lower">Aceptamos toda clase de literatura</span>
                                </h2>
                                <p>Comenzamos nuestra labor  de recuperar libros de segunda mano para darles una segunda vida en 2023. Somos una empresa joven, con grandes expectativas y centrada en distribuir el conocimiento a coste cero.</p>
                                <p class="mb-0">
                                    Colaboramos con centros públicos y empresas privadas
                                    <em>para</em>
                                    descentralizar nuestro servicio de recogida y entrega de libros. Sabemos que en cada momento de la vida necesitamos diferentes tipos de historias y por eso aceptamos desde libros de texto, hasta comics, pasando por novelas, cuentos infantiles...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Banco de Libros Fénix 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
