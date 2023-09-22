## API de Fénix (o Biblioteca)
<p>Esta API proporciona acceso a datos relacionados con libros, usuarios, préstamos, categorías y más para el banco de libros Fénix.</p>

<h2>Endpoints Principales</h2>

<label>Libros(Books)</label>
<ul>
    <li>'/booksApi'-Obtiene la lista de libros</li>
    <li>'/booksApi/{id}'-Obtiene los detalles específicos de un libro por su Id</li>
    <li>...</li>
</ul>

<label>Usuarios(Users)</label>
<ul>
    <li>'/usersApi'-Obtiene la lista de usuarios</li>
    <li>'/usersApi/{id}'-Obtiene los detalles de un usuario específico por su Id</li>
    <li>...</li>
</ul>

<label>Préstamos(Loans)</label>
<ul>
    <li>'/bookLoansApi'-Obtiene la lista de préstamos</li>
    <li>'/bookLoansApi/{id}'-Obtiene los detalles de un préstamo específico por su Id</li>
    <li>...</li>
</ul>

<label>Categorías(Categories)</label>
<ul>
    <li>'/categoriesApi'-Obtiene la lista de categorías</li>
    <li>'/categoriesApi/{id}'-Obtiene los detalles de una categoría específica por su Id</li>
    <li>...</li>
</ul>

<label>Roles de Usuarios(User Roles)</label>
<ul>
    <li>'/rolesApi'-Obtiene la lista de roles de usuarios</li>
    <li>'/rolesApi/{id}'-Obtiene los detalles de un rol específico por su Id</li>
    <li>...</li>
</ul>


<h2>Autenticación</h2>
<p>La API actualmente no requiere autenticación para acceder a los datos. Sin embargo, si se implementa autenticación en el futuro, se proporcionarán detalles adicionales aquí.</p>


<h2>Ejemplos de Uso</h2>

<h3>Obtener la lista de libros</h3>
<p>GET /api/v1/booksApi</p>

<h3>Obtener detalles de un libro</h3>
<p>GET /api/v1/booksApi/{id}</p>

<h3>Crear un nuevo préstamo</h3>
<p>POST /api/v1/bookLoansApi</p>

<h4>Cuerpo de la Solicitud</h4>
<p>
{
    "book_id": 1,
    "user_id": 2,
    "loan_date": "2023-09-22",
    "return_date": "2023-09-29"
}
</p>


<h2>Notas Adicionales</h2>
<p>Los préstamos están gestionados a través de dos tablas: una tabla pivot (book_user) y una tabla book_loans.</p>