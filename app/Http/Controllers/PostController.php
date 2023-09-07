<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    //resto de metodos
    public function update(Request $request, Post $post)
    {
        //Tu lógica para actualizar la publicación
    }

    public function destroy(Post $post)
    {
        //Tu lógica para borrar la publicación
    }

    //resto de metodos

}
