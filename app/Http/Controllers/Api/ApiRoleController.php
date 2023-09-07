<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class ApiRoleController extends Controller
{
    public function index()
    {
        $roles = Role::all(); 
        return response()->json($roles, 200); 
    }

    
    public function show($id)
    {
        $role = Role::find($id); 
        if (!$role) {
            return response()->json(['message' => 'No se encontró el rol'], 404); 
        }
        return response()->json($role, 200); 
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'name' =>'required|string|max:255',
            // Agrega otras reglas de validación según tus necesidades
        ]);

      
        $role = Role::create($request->all());
        return response()->json(['message' => 'Rol creado con éxito', 'role' => $role], 201);
    }

   
    public function update(Request $request, $id)
    {
       
        $role = Role::find($id);
        if (!$role) {
            return response()->json(['message' => 'No se encontró el rol'], 404); 
        }

        // Validar los datos de entrada (del formulario)
        $request->validate([
           'name' =>'string',
            // Otras reglas de validación según tus necesidades para campos adicionales
        ]);
       
        $role->update($request->all());
        return response()->json($role, 200); 
    }

   
    public function destroy($id)
    {
       
        $role = Role::find($id);
        if (!$role) {
            return response()->json(['message' => 'No se encontró el rol'], 404); 
        }

        $role->delete();
        return response()->json(['message' => 'Rol eliminado'], 204);
    }
}



