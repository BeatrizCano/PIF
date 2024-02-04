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
        ]);

        $role = new Role;
        $role->name = $request->name;
        $role->save();

        $data = [
            'message' => 'Rol creado con éxito',
            'roles' => $role
        ];
        return response()->json($data, 201);

    }

   
    public function update(Request $request, $id)
    {
       
        $role = Role::find($id);
        if (!$role) {
            return response()->json(['message' => 'No se encontró el rol'], 404); 
        }

        $request->validate([
           'name' =>'string',
        ]);
       
        $role->update([
            'name' => $request->name,
        ]);
    
        $data = [
            'message' => 'Rol modificado exitosamente',
            'roles' => $role
        ];
        
        return response()->json($data, 200);
    }

   
    public function destroy($id)
    {
       
        $role = Role::find($id);
        if (!$role) {
            return response()->json(['message' => 'No se encontró el rol'], 404); 
        }

        $role->delete();
        $data = [
            'message' => 'Rol eliminado exitosamente',
            'roles' => $role
        ];
        return response()->json($data, 200);      
       
    }
}



