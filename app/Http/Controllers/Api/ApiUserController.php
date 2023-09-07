<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ApiUserController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        return response()->json($users, 200); 
    }

    
    public function show($id)
    {
        $user = User::find($id); 
        if (!$user) {
            return response()->json(['message' => 'No se encontró el usuario'], 404); 
        }
        return response()->json($user, 200); 
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'name' =>'required|string|max:255',
            'email' =>'required|email|max:255|unique:users',          
            // Agrega otras reglas de validación según tus necesidades
        ]);

      
        $user = User::create($request->all());
        return response()->json(['message' => 'Usuario creado con éxito', 'user' => $user], 201);
    }

   
    public function update(Request $request, $id)
    {
       
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'No se encontró el usuario'], 404); 
        }

        // Validar los datos de entrada (del formulario)
        $request->validate([
           'name' =>'string',
           'email' => 'email',
            // Otras reglas de validación según tus necesidades para campos adicionales
        ]);
       
        $user->update($request->all());
        return response()->json($user, 200); 
    }

   
    public function destroy($id)
    {
       
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'No se encontró el usuario'], 404); 
        }

        $user->delete();
        return response()->json(['message' => 'Usuario eliminado'], 204);
    }
}
