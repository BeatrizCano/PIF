<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('books', App\Http\Controllers\BookController::class)->middleware('auth');
Route::resource('categories', App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::resource('book-users', App\Http\Controllers\BookUserController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Restringir el acceso a la ruta "/admin"
Route::get('/admin', function () {
    return 'Bienvenido al panel de administración';
})->middleware('auth.admin:admin');


//Rutas para gestionar las publicaciones (posts)
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
});
