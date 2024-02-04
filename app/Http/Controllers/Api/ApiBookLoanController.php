<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bookloan;

class ApiBookLoanController extends Controller
{
    public function index()
    {
        $bookLoans = BookLoan::all();
        return response()->json($bookLoans, 200); 
    }

    public function show($id)
    {
        $bookLoan = BookLoan::find($id); 
        if (!$bookLoan) {
            return response()->json(['message' => 'No se encontró el préstamo del libro'], 404);
        }
        return response()->json($bookLoan, 200); 
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'loan_date' => 'required|date',
            'return_date' => 'required|date|after:loan_date',
        ]);

        $bookLoan =BookLoan::create($request->all());
        return response()->json($bookLoan, 201); 

    }

    public function update(Request $request, $id)
    {
         $bookLoan = BookLoan::find($id);
         if (!$bookLoan) {
             return response()->json(['message' => 'No se encontró el préstamo del libro'], 404);
         }

         $request->validate([
            
            'loan_date' => 'date', 
            'return_date' => 'date',

         ]);

         $bookLoan->update($request->all());
         return response()->json($bookLoan, 200); 
    }

    public function destroy($id)
    {
        $bookLoan = BookLoan::find($id);
        if (!$bookLoan) {
            return response()->json(['message' => 'No se encontró el préstamo del libro'], 404);
        }

        $bookLoan->delete();
        return response()->json(['message' => 'Préstamo de libro eliminado'], 204); 
    }
       
}
