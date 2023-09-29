<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;//Importar el modelo

class ApiBookController extends Controller
{
    //Método para obtener una lista de libros
    public function index()
    {
        $books = Book::all(); //Obtener todos los libros desde la base de datos
        return response()->json($books, 200); //Responder con los libros en formato JSON
    }

    //Método para mostrar detalle de un libro por su ID
    public function show($id)
    {
        $book = Book::find($id); //Buscar un libro por su ID
        if (!$book) {
            return response()->json(['message' => 'No se encontró el libro'], 404);//si no se encuentra el libro responder con un error 404
        }
        return response()->json($book, 200); //Responder con los detalles del libro en formato JSON
    }

    //Método para crear un nuevo libro
    public function store(Request $request)
    {
        $book = new Book;
        $book->category_id = $request->category_id;           
        $book->authors = $request->authors;
        $book->description = $request->description;
        $book->language = $request->language;
        $book->publisher= $request->publisher;
        $book->year= $request->year;
        $book->publisher= $request->publisher;
        $book->isbn= $request->isbn;
        $book->image= $request->image;
        $book->price= $request->price;
        $book->stock= $request->stock;
        $book->status= $request->status;
        $book->title = $request->title;
        
        $book->save();
        $data = [
            'message' => 'book created successfully',
            'book' => $book
        ];
        
        return response()->json($data);

    }

    //Método para actualizar los datos de un libro por su ID
    public function update(Request $request, $id)
    {
        $book = Book::find($id); // Buscar el libro por su ID
    
        if (!$book) {
            return response()->json(['message' => 'No se encontró el libro'], 404);
        }
    
        // Actualizar las propiedades del libro
        $book->category_id = $request->category_id;           
        $book->authors = $request->authors;
        $book->description = $request->description;
        $book->language = $request->language;
        $book->publisher= $request->publisher;
        $book->year= $request->year;
        $book->isbn= $request->isbn;
        $book->image= $request->image;
        $book->price= $request->price;
        $book->stock= $request->stock;
        $book->status= $request->status;
        $book->title = $request->title;
        
        $book->save();
    
        $data = [
            'message' => 'book updated successfully',
            'book' => $book
        ];
        
        return response()->json($data);
    }
    
    //Método para eliminar un libro por su ID
    public function destroy($id)
    {
        //Buscar un libro por su ID 
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'No se encontró el libro'], 404);//si no se encuentra el libro responder con un error 404
        }

        //Eliminar el libro en la base de datos
        $book->delete();
        return response()->json(['message' => 'Libro eliminado'], 204); //Responder con un código de estado 204 (borrado)
    }
       
}
