<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Book;

class ManagementBooksTest extends TestCase
{
    // Aquí van las pruebas que escribimos anteriormente
    public function testIndex()
    {
        // Autenticar un usuario (puedes usar un usuario existente o crear uno para la prueba)
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        // Hace una solicitud HTTP GET a la ruta 'books.index' (que debería mostrar la lista de libros)
        $response = $this->get(route('books.index'));

        // Asegura que la respuesta HTTP tenga un estado 200 (éxito)
        $response->assertStatus(200);

        // Asegura que la vista renderizada sea 'book.index'
        $response->assertViewIs('book.index');
    }

    public function testCreate()
    {
        // Autenticar un usuario (puedes usar un usuario existente o crear uno para la prueba)
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);
        
        // Hace la solicitud GET a la ruta 'books.create' 
        $response = $this->get(route('books.create'));

        // Asegura que la respuesta HTTP tenga un estado 200 (éxito)
        $response->assertStatus(200);

        // Asegura que la vista renderizada sea 'book.create'
        $response->assertViewIs('book.create');
    }

    public function testStore() 
    {
        // Autenticar un usuario (puedes usar un usuario existente o crear uno para la prueba)
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        $bookData = [
            'category_id' => '1',
            'authors' => 'Henri Charrière ',
            'description' => 'Un clásico autobiográfico que relata la increíble evasión de un hombre que vivió una auténtica odisea por perseguir aquello que nunca debió perder: la libertad.',
            'language' => 'Castellano',
            'publisher' => 'Debolsillo',
            'year' => '2020',
            'isbn' => '9788466342148',
            'image' => 'https://imagessl8.casadellibro.com/a/l/s7/48/9788466342148.webp',
            'price' => '10', 
            'stock' => '20',
            'status' => 'Disponible',
            'title' => 'Papillon', 
        ];

        //Utiliza el método post() para simular el envío del formulario. La ruta debería ser la misma que la que se utiliza en el formulario de creación (route('books.store')). Pasa los datos del libro como segundo argumento.
        $response = $this->post(route('books.store'), $bookData);
        //Utiliza assertRedirect() para verificar si se redirige a la ruta correcta después de almacenar el libro
        $response->assertRedirect(route('books.index'));   
        //Utiliza assertDatabaseHas() para verificar que el libro se haya guardado correctamente en la base de datos
        $this->assertDatabaseHas('books', $bookData);

    }

    public function testEdit()
    {
        // Autenticar un usuario (puedes usar un usuario existente o crear uno para la prueba)
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        // Crear un libro directamente en la base de datos
        $book = \App\Models\Book::create([
            'category_id' => '1',
            'authors' => 'Henri Charrière ',
            'description' => 'Un clásico autobiográfico que relata la increíble evasión de un hombre que vivió una auténtica odisea por perseguir aquello que nunca debió perder: la libertad.',
            'language' => 'Castellano',
            'publisher' => 'Debolsillo',
            'year' => '2020',
            'isbn' => '9788466342148',
            'image' => 'https://imagessl8.casadellibro.com/a/l/s7/48/9788466342148.webp',
            'price' => '10', 
            'stock' => '20',
            'status' => 'Disponible',
            'title' => 'Papillon', 
        ]);

        // Realizar la solicitud GET a la ruta 'books.edit' 
        $response = $this->get(route('books.edit', $book->id));

        // Asegurar que la respuesta HTTP tenga un estado 200 (éxito)
        $response->assertStatus(200);

        // Asegurar que la vista renderizada sea 'book.edit'
        $response->assertViewIs('book.edit');
    }

    public function testUpdate()
{
     // Autenticar un usuario (puedes usar un usuario existente o crear uno para la prueba)
     $user = \App\Models\User::factory()->create();
     $this->actingAs($user);

    // Crear un libro manualmente
    $book = \App\Models\Book::create([
            'category_id' => '1',
            'authors' => 'Henri Charrière ',
            'description' => 'Un clásico autobiográfico que relata la increíble evasión de un hombre que vivió una auténtica odisea por perseguir aquello que nunca debió perder: la libertad.',
            'language' => 'Castellano',
            'publisher' => 'Debolsillo',
            'year' => '2020',
            'isbn' => '9788466342148',
            'image' => 'https://imagessl8.casadellibro.com/a/l/s7/48/9788466342148.webp',
            'price' => '10', 
            'stock' => '20',
            'status' => 'Disponible',
            'title' => 'Papillon', 
    ]);

    $bookData = [
        'category_id' => '1',
        'authors' => 'Alejandro Dumas ',
        'description' => 'Un clásico autobiográfico que relata la increíble evasión de un hombre que vivió una auténtica odisea por perseguir aquello que nunca debió perder: la libertad.',
        'language' => 'Castellano',
        'publisher' => 'Debolsillo',
        'year' => '2020',
        'isbn' => '9788466342148',
        'image' => 'https://imagessl8.casadellibro.com/a/l/s7/48/9788466342148.webp',
        'price' => '10', 
        'stock' => '20',
        'status' => 'Disponible',
        'title' => 'Los Tres Mosqueteros', 
    ];

    $response = $this->put(route('books.update', $book->id), $bookData);
    $response->assertRedirect(route('books.index'));
    $this->assertDatabaseHas('books', $bookData);
}

public function testShow()
{  
    // Autenticar un usuario (puedes usar un usuario existente o crear uno para la prueba)
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);

    // Crear un libro manualmente
    $book = \App\Models\Book::create([
        'category_id' => '1',
        'authors' => 'Alejandro Dumas',
        'description' => 'Un clásico autobiográfico que relata la increíble evasión de un hombre que vivió una auténtica odisea por perseguir aquello que nunca debió perder: la libertad.',
        'language' => 'Castellano',
        'publisher' => 'Debolsillo',
        'year' => '2020',
        'isbn' => '9788466342148',
        'image' => 'https://imagessl8.casadellibro.com/a/l/s7/48/9788466342148.webp',
        'price' => '10', 
        'stock' => '20',
        'status' => 'Disponible',
        'title' => 'Los Tres Mosqueteros', 
    ]);

    $response = $this->get(route('books.show', $book->id));
    $response->assertStatus(200);
    $response->assertViewIs('book.show');
}

public function testDestroy()
{
    // Autenticar un usuario (puedes usar un usuario existente o crear uno para la prueba)
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);

    // Crear un libro manualmente
    $book = Book::create([
        'category_id' => 1,
        'authors' => 'Autor del libro',
        'description' => 'Descripción del libro',
        'language' => 'Español',
        'publisher' => 'Editorial XYZ',
        'year' => '2023',
        'isbn' => '1234567890',
        'image' => 'https://ruta-de-la-imagen.com/imagen.jpg',
        'price' => 20,
        'stock' => 10,
        'status' => 'Disponible',
        'title' => 'Título del libro',
    ]);

    $response = $this->delete(route('books.destroy', $book->id));
    $response->assertRedirect(route('books.index'));
    $this->assertDatabaseMissing('books', ['id' => $book->id]);
}

   
}
