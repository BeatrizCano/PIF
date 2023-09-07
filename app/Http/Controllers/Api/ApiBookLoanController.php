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

         //Crear un nuevo prestamo de libro en la base de datos
        $bookLoan =BookLoan::create($request->all()); //Crear un nuevo préstamo desde la base de datos
        return response()->json($bookLoan, 201); //Responder con el préstamo de libro creado en formato JSON y un código de estado 201 (creado)

    }

    //Método para actualizar los datos de un préstamo de un libro por su ID
    public function update(Request $request, $id)
    {
         //Buscar un préstamo de  libro por su ID 
         $bookLoan = BookLoan::find($id);
         if (!$bookLoan) {
             return response()->json(['message' => 'No se encontró el préstamo del libro'], 404);//si no se encuentra el libro responder con un error 404
         }

         //Validar los datos de entrada (del formulario)
         $request->validate([
            
            'loan_date' => 'date', //puede ser opcional
            'return_date' => 'date',
            //Otras reglas de validación según tus necesidades para campos adicionales

         ]);

         //Actualizar los datos del libro en la base de datos
         $bookLoan->update($request->all());
         return response()->json($bookLoan, 200); //Responder con los nuevos datos del préstamo de libro en formato JSON
    }

    //Método para eliminar un préstamo de libro por su ID
    public function destroy($id)
    {
        //Buscar un préstamo de libro por su ID
        $bookLoan = BookLoan::find($id);
        if (!$bookLoan) {
            return response()->json(['message' => 'No se encontró el préstamo del libro'], 404);// Responder con un error 404 si no se encuentra el préstamo
        }

        //Eliminar el libro en la base de datos
        $bookLoan->delete();
        return response()->json(['message' => 'Préstamo de libro eliminado'], 204); //Responder con un código de estado 204 (borrado)
    }
       
}
