<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class ApiBookController extends Controller
{
        public function index()
    {
        $books = Book::all(); 
        return response()->json($books, 200); 
    }

        public function show($id)
    {
        $book = Book::find($id); 
        if (!$book) {
            return response()->json(['message' => 'No se encontró el libro'], 404);
        }
        return response()->json($book, 200); 
    }

    public function store(Request $request)
    {
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

        $book =Book::create($request->all()); 
        return response()->json($book, 201); 

    }

    public function update(Request $request, $id)
    {
         $book = Book::find($id);
         if (!$book) {
             return response()->json(['message' => 'No se encontró el libro'], 404);
         }

         $request->validate([
            
            'title' =>'string', 
            'author' =>'string',

         ]);

         $book->update($request->all());
         return response()->json($book, 200); 
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'No se encontró el libro'], 404);
        }

        $book->delete();
        return response()->json(['message' => 'Libro eliminado'], 204); 
    }
       
}
