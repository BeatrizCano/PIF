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
            'password' => 'required',    
            // Agrega otras reglas de validación según tus necesidades
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $data = [
            'message' => 'Usuario creado con éxito',
            'users' => $user
        ];
        return response()->json($data, 201);

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
        ]);

        $user->update([
            'name' => $request->name,            
            'email' => $request->email,
            'password' => $request->password,
        ]);
    
        $data = [
            'message' => 'Usuario modificado exitosamente',
            'users' => $user
        ];
        
        return response()->json($data, 200);
    
    }

   
    public function destroy($id)
    {
       
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'No se encontró el usuario'], 404); 
        }

        $user->delete();
        $data = [
            'message' => 'Usuario eliminado exitosamente',
            'users' => $user
        ];
        return response()->json($data, 200);      

    }
}
