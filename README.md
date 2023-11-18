<h1>Proyecto Banco de Libros Fénix</h1>
<p>Este proyecto de Laravel se centra en la gestión de un banco de libros o biblioteca, con dos áreas principales: una para usuarios y otra para administradores. Además de una API que alimenta la información que se muestra en la web.</p>

<h2>Características Destacadas</h2>

<ul>
    <li>Sistema de autenticación y registro para usuarios y administradores.</li>
    <li>Roles de usuario y sistema de permisos.</li>
    <li>CRUDs para libros, categorías y préstamos.</li>
    <li>Formulario de contacto con confirmación de envío mediante JavaScript.</li>
    <li>Enlace de inicio de sesión desde la vista principal del usuario.</li>
    <li>Área de administrador con acceso a los CRUDs y bienvenida personalizada.</li>
</ul>

<h2>Tecnologías Utilizadas</h2>

<ul>
    <li>Laravel (PHP) (PHPUnit)</li>
    <li>XAMPP</li>
    <li>MySql</li>
    <li>Composer</li>
    <li>Generador de CRUDs: [Ibex Crud Generator](https://youtu.be/j7bml8EQpIk?list=PLpzh_jLMuqxkr9vfq66q44xV5D6l9x6Oa&t=2117)</li>
    <li> Plantilla de Bootstrap: [Start Bootstrap](https://startbootstrap.com/)</li>
</ul>

<h2>Instalación Local</h2>

<ol>
    <li>Clona el repositorio a tu máquina local.</li>
    <li>Configura el archivo `.env` con la información de tu base de datos y correo electrónico.</li>
    <li> Ejecuta `composer install` para instalar las dependencias de Laravel.</li>
    <li> Ejecuta `php artisan key:generate` para generar una nueva clave de aplicación.</li>
    <li>Ejecuta `php artisan migrate` para crear las tablas en la base de datos.(Dale a "Yes" para que te cree BBDD de forma automática)</li>
    <li>Ejecuta `php artisan db:seed` para llenar la base de datos con datos de prueba (opcional).</li>
    <li>Ejecuta `php artisan vendor:publish --provider="Ibex\CrudGenerator\CrudGeneratorServiceProvider"` para publicar las vistas y recursos del generador de CRUD.</li>
    <li>Ejecuta `php artisan crud:generate` para generar CRUDs para tus modelos existentes.</li>
    <li>Inicia el servidor local usando XAMPP.</li>
</ol>

<h2>Uso</h2>

<ul>
    <li>Para abrir el proyecto lanza "php artisan serve" y "npm run dev" en la consola.</li>
    <li>Accede a la vista principal del usuario y navega por las funcionalidades.</li>
    <li>Si eres administrador, inicia sesión y accede a tu área personalizada.</li>
    <li>Utiliza los CRUDs para gestionar libros, categorías y préstamos.</li>
</ul>

<h2>Segunda Fase</h2>

<ul>
    <li>Implementar un buscador de libros para el lado del administrador</li>
    <li>Configurar un servicio de confirmación por correo electrónico para el formulario de contacto</li>
    <li>Crear funcionalidades para la API</li>
</ul>


<h2>Testing</h2>

<ul>
    <li>Se han testeado las funcionalidades del CRUD "book" usando phpUnit. Ha pasado las pruebas satisfactoriamente.</li>
    <li>En la segunda fase, se creará una base de datos separada para las pruebas y otros requisitos necesarios para mantener la integridad de la base de datos principal antes de continuar con el testing.</li>
</ul>


<h2>API</h2>

<ul>
<li>La API proporciona acceso a los datos de libros, usuarios, préstamos y más.</li>
<li>Documentación detallada sobre como interactuar con la API del proyecto: Readme_API.md</li>
</ul>
