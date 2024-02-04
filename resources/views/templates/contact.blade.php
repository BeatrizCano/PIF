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
                <span class="site-heading-upper text-yellow mb-3">Contacta con nosotr@s</span>
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
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/contact.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Colabora con la causa</span>
                                    <span class="section-heading-lower">¡Te esperamos!</span>
                                </h2>
                                <p>Esperamos que te haya gustado nuestra iniciativa sin ánimo de lucro. ¿Te animas a participar? Hay muchas formas de colaborar, puedes formar parte de nuestro equipo, puedes donar los libros que ya no desees conservar, si eres una empresa o centro puedes ofrecerte como punto de recogida y entrega de libros, si eres una editorial y quieres donar libros de texto para los estudiantes...Hay muchas maneras, ¡Elige la tuya!</p>
                                <p class="mb-0">
                                    ¡Por supuesto, también te ayudamos a ti!
                                    <em>¿Necesitas libros</em>
                                    para fomentar la lectura entre los más pequeños de la casa, en tu colegio, biblioteca, centro social, comunidad de vecinos...? Si eliges colaborar con nosotros o bien necesitas un préstamo de libros, contacta con nosotr@s a través de nuestro formulario y nos pondremos en contacto contigo en menos de 24 horas. Un cordial saludo y !Seguid disfrutando de la lectura!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Cuéntanos tu historia</span>
                                <span class="section-heading-lower">Formulario de contacto</span>
                            </h2>
                            <div>
                                <form id="contactForm" action="{{ route('send-form') }}" method="post">
                                    @csrf <!--para proteger contra ataques de falsificación de solicitudes entre sitios (CSRF).-->
                                <div class="form-floating mb-3">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="floatingPassword" placeholder="nombre" required>
                                        <label for="name">Nombre</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="lastName"  class="form-control" id="floatingPassword" placeholder="apellidos" required>
                                        <label for="lastName">Apellidos</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="email" name="email"  class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com" required>
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="issue"  class="form-control" id="floatingPassword" placeholder="asunto" required>
                                        <label for="issue">Asunto</label>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="comments"  placeholder="Deja tus comentarios aquí" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="comments">Comentarios</label>
                                    </div>
                                    <br>
                                    <div>
                                        <button type="submit" class="btn btn-primary mb-4">Submit</button>
                                    </div> 
                                </form>
                                <div id="mesagge" class="mb-4" style="display:none;">
                                    ¡El formulario se ha enviado correctamente! ¡Gracias por contactar con nosotr@s! Nos pondremos en contacto con usted en menos de 24 horas.
                                </div>
                                <div>
                                    <a href="#top" class="text-faded-footer">Volver arriba</a>
                                </div>        
                            </div>
                            <!--Escucha el evento de envío del formulario (submit). Cuando el formulario se envía, evita el comportamiento predeterminado (recargar la página) usando event.preventDefault(). Luego, muestra el elemento con el id mensaje configurando su estilo display a block, lo que lo hará visible.-->
                            <script>
                                 document.getElementById("contactForm").addEventListener("submit", function(event) {
                                    event.preventDefault();
                                    document.getElementById("mesagge").style.display = "block";
                                 });
                            </script>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded-footer text-center py-4">
            <div class="container"><p class="m-0 small">Copyright &copy; Banco de Libros Fénix 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
