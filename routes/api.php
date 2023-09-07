<?php
use App\Http\Controllers\Api\ApiBookController;
use App\Http\Controllers\Api\ApiUserController;
use App\Http\Controllers\Api\ApiRoleController;
use App\Http\Controllers\Api\ApiPostController;
use App\Http\Controllers\Api\ApiCategoryController;
use App\Http\Controllers\Api\ApiBookUserController;
use App\Http\Controllers\Api\ApiBookLoanController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->group(function () {
    // Ruta para obtener información del usuario autenticado
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    //Agregar las rutas para los controladores API
    Route::prefix('v1')->group(function () {

        // El grupo Route::resource ya incluye todas las rutas de forma automática(las del crud),
            //Laravel automáticamente crea las rutas para las acciones CRUD (index, show, store, update, destroy) y las asocia a los métodos correspondientes en tu controlador ApiBookController.
       
        // Rutas para los usuarios (User)
    Route::resource('usersApi', ApiUserController::class);

    // Rutas para los roles (Role)
    Route::resource('rolesApi', ApiRoleController::class);

    // Rutas para las publicaciones (Post)
    Route::resource('postsApi', ApiPostController::class);

    // Rutas para las categorías (Category)
    Route::resource('categoriesApi', ApiCategoryController::class);

    // Rutas para la tabla pivot entre usuarios y libros (Book User)
    Route::resource('bookUsersApi', ApiBookUserController::class);

    // Rutas para préstamos (Book Loan)
    Route::resource('bookLoansApi', ApiBookLoanController::class);

    // Rutas para los libros (Books)
    Route::resource('booksApi', ApiBookController::class);


    //});
});
