<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Book;

class ManagementBooksTest extends TestCase
{
    public function testIndex()
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('books.index'));
        $response->assertStatus(200);
        $response->assertViewIs('book.index');
    }

    public function testCreate()
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);
        
        $response = $this->get(route('books.create'));
        $response->assertStatus(200);
        $response->assertViewIs('book.create');
    }

    public function testStore() 
    {
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

        $response = $this->post(route('books.store'), $bookData);       
        $response->assertRedirect(route('books.index'));          
        $this->assertDatabaseHas('books', $bookData);

    }

    public function testEdit()
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

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

        $response = $this->get(route('books.edit', $book->id));
        $response->assertStatus(200);
        $response->assertViewIs('book.edit');
    }

    public function testUpdate()
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

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
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

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
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

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
