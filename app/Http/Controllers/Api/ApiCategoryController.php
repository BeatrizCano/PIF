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

        $data = [
            'message' => 'Categoría creada con éxito',
            'category' => $category,
        ];

        return response()->json($data, 201);
    }
    
   
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'No se encontró la categoría'], 404);
        }

        $request->validate([
            'name' => 'string'
        ]);

        $category->update($request->all());

        $data = [
            'message' => 'Categoría actualizada con éxito',
            'category' => $category,
        ];

        return response()->json($data, 200);
    }

   
    public function destroy($id)
    {
       
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message' => 'No se encontró la categoría'], 404); 
        }

        $category->delete();
        $data = [
            'message' => 'Libro eliminado exitosamente',
            'category' => $category
        ];
        return response()->json($data, 200);
    }
}

