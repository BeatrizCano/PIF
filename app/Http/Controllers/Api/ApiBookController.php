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
        //Validar los datos de entrada (del formulario)
        $request->validate([
            
            'title' =>'required|string|max:255',
            'author' =>'required|string|max:255',
            'description' =>'required|string',
            'language' =>'required|string|max:255',
            'publisher' =>'required|string|max:255',
            'year' =>'required|integer|min:1800|max:' . date('Y'),
            'isbn' =>'required|string|max:255',
            'image' =>'required|string',
            'price' =>'required|number|min:0',
            'stock' =>'required|integer|min:0',
            'status' =>'required|string|max:255',
    
        ]);

         //Crear un nuevo libro en la base de datos
        $book =Book::create($request->all()); //Crear un nuevo libro desde la base de datos
        return response()->json($book, 201); //Responder con el libro creado en formato JSON

    }

    //Método para actualizar los datos de un libro por su ID
    public function update(Request $request, $id)
    {
         //Buscar un libro por su ID 
         $book = Book::find($id);
         if (!$book) {
             return response()->json(['message' => 'No se encontró el libro'], 404);//si no se encuentra el libro responder con un error 404
         }

         //Validar los datos de entrada (del formulario)
         $request->validate([
            
            'title' =>'string', //puede ser opcional
            'author' =>'string',
            //Otras reglas de validación según tus necesidades para campos adicionales

         ]);

         //Actualizar los datos del libro en la base de datos
         $book->update($request->all());
         return response()->json($book, 200); //Responder con los nuevos datos del libro en formato JSON
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
