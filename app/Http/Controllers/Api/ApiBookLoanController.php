<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bookloan;

class ApiBookLoanController extends Controller
{
    //Método para obtener una lista de préstamos de libros
    public function index()
    {
        $bookLoans = BookLoan::all(); //Obtener todos los préstamos de libros desde la base de datos
        return response()->json($bookLoans, 200); //Responder con los préstamos de libros en formato JSON
    }

    //Método para mostrar detalle de un préstamo de libro por su ID
    public function show($id)
    {
        $bookLoan = BookLoan::find($id); //Buscar un préstamo de libro por su ID
        if (!$bookLoan) {
            return response()->json(['message' => 'No se encontró el préstamo del libro'], 404);//si no se encuentra el libro responder con un error 404
        }
        return response()->json($bookLoan, 200); //Responder con los detalles del préstamo del libro en formato JSON
    }

    //Método para crear un nuevo préstamos de libro
    public function store(Request $request)
    {
        //Validar los datos de entrada (del formulario)
        $request->validate([            
            'loan_date' => 'required|date',
            'return_date' => 'required|date|after:loan_date',
             // Agrega otras reglas de validación según tus necesidades
        ]);

        $bookLoan = new BookLoan;
        $bookLoan->book_user_id=$request->book_user_id;
        $bookLoan->loan_date=$request->loan_date;
        $bookLoan->return_date=$request->return_date;
        $bookLoan->save();

        $data = [
            'message' => 'Préstamo creado exitosamente',
            'book_loans' => $bookLoan
        ];
        
        return response()->json($bookLoan, 201); //Responder con el préstamo de libro creado en formato JSON y un código de estado 201 (creado)

    }

    //Método para actualizar los datos de un préstamo de un libro por su ID
    public function update(Request $request, $id)
{ 
    
    $bookLoan = BookLoan::find($id);
    if (!$bookLoan) {
        return response()->json(['message' => 'No se encontró el préstamo'], 404);
    }

    $request->validate([            
        'loan_date' => 'required|date',
        'return_date' => 'required|date|after:loan_date',
    ]);

    $bookLoan->update([
        'book_user_id' => $request->book_user_id,
        'loan_date' => $request->loan_date,
        'return_date' => $request->return_date,
    ]);

    $data = [
        'message' => 'Préstamo actualizado exitosamente',
        'book_loans' => $bookLoan
    ];

    return response()->json($data, 200);
}

  
    public function destroy(BookLoan $bookLoan, $id)
    {

         //Buscar un libro por su ID 
         $bookLoan = BookLoan::find($id);
         if (!$bookLoan) {
             return response()->json(['message' => 'No se encontró el préstamo'], 404);//si no se encuentra el libro responder con un error 404
         }
         
        $bookLoan->delete();
        $data = [
            'message' => 'Préstamo eliminado exitosamente',
            'book_loans' => $bookLoan
        ];
        return response()->json($data, 200);
       
    }
       
}
