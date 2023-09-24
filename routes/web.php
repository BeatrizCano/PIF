<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;



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

Route::get('/welcome', function () {
    return view('welcome'); // O la vista que desees mostrar
});

Auth::routes();

Route::resource('books', App\Http\Controllers\BookController::class)->middleware('auth');//sino funciona probar a quitar middleware
Route::resource('categories', App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::resource('book-loans', App\Http\Controllers\BookLoanController::class)->middleware('auth');
Route::resource('book-users', App\Http\Controllers\BookUserController::class)->middleware('auth');
Route::resource('book-loans', App\Http\Controllers\BookLoanController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Restringir el acceso a la ruta "/admin"
Route::get('/admin', function () {
    return 'Bienvenido al panel de administración';
})->middleware('auth.admin:admin');

//Rutas para gestionar las publicaciones (posts)
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
});

Route::view('template', 'layouts.template')->name('template');
Route::view('about', 'templates.about')->name('about');
Route::view('contact', 'templates.contact')->name('contact');
Route::view('yourBooks', 'templates.yourBooks')->name('yourBooks');

Route::post('/send-form', 'FormController@sendForm')->name('send-form');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

