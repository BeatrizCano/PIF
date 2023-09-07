<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class ApiPostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); 
        return response()->json($posts, 200); 
    }

    
    public function show($id)
    {
        $post = Post::find($id); 
        if (!$post) {
            return response()->json(['message' => 'No se encontró el post'], 404); 
        }
        return response()->json($post, 200); 
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
              //No tiene columnas aún     
            // Agrega otras reglas de validación según tus necesidades
        ]);

      
        $post = Post::create($request->all());
        return response()->json($post, 201); 
    }

   
    public function update(Request $request, $id)
    {
       
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'No se encontró el post'], 404); 
        }

        // Validar los datos de entrada (del formulario)
        $request->validate([
           
            // Otras reglas de validación según tus necesidades para campos adicionales
        ]);
       
        $post->update($request->all());
        return response()->json($post, 200); 
    }

   
    public function destroy($id)
    {
       
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'No se encontró el post'], 404); 
        }

        $post->delete();
        return response()->json(['message' => 'Post eliminado'], 204);
    }
}


