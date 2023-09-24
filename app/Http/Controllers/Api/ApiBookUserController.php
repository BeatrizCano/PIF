<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BookUser;

class ApiBookUserController extends Controller
{
   
    public function index()
    {
        $bookUsers = BookUser::all(); 
        return response()->json($bookUsers, 200); 
    }

    
    public function show($id)
    {
        $bookUser = BookUser::find($id); 
        if (!$bookUser) {
            return response()->json(['message' => 'No se encontró el préstamo de libro'], 404); 
        }
        return response()->json($bookUser, 200); 
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'user_id' => 'required|integer',
            'book_id' => 'required|integer',
        ]);

      
        $bookUser = BookUser::create($request->all());
        return response()->json($bookUser, 201); 
    }

   
    public function update(Request $request, $id)
    {
       
        $bookUser = BookUser::find($id);
        if (!$bookUser) {
            return response()->json(['message' => 'No se encontró el préstamo de libro'], 404); 
        }

        $request->validate([
            'user_id' => 'integer',
            'book_id' => 'integer',
        ]);
       
        $bookUser->update($request->all());
        return response()->json($bookUser, 200); 
    }

   
    public function destroy($id)
    {
       
        $bookUser = BookUser::find($id);
        if (!$bookUser) {
            return response()->json(['message' => 'No se encontró el préstamo de libro'], 404); 
        }

        $bookUser->delete();
        return response()->json(['message' => 'Préstamo de libro eliminado'], 204);
    }
}