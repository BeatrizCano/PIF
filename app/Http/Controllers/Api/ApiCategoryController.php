<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ApiCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); 
        return response()->json($categories, 200); 
    }

    
    public function show($id)
    {
        $category = Category::find($id); 
        if (!$category) {
            return response()->json(['message' => 'No se encontró la categoría'], 404); 
        }
        return response()->json($category, 200); 
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',           
            // Agrega otras reglas de validación según tus necesidades
        ]);

      
        $category = Category::create($request->all());
        return response()->json($category, 201); 
    }

   
    public function update(Request $request, $id)
    {
       
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'No se encontró la categoría'], 404); 
        }

        // Validar los datos de entrada (del formulario)
        $request->validate([
            'name' => 'string',
            // Otras reglas de validación según tus necesidades para campos adicionales
        ]);
       
        $category->update($request->all());
        return response()->json($category, 200); 
    }

   
    public function destroy($id)
    {
       
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'No se encontró la categoría'], 404); 
        }

        $category->delete();
        return response()->json(['message' => 'Categoría eliminada'], 204);
    }
}

