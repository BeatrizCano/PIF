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
    //Route::prefix('v1')->group(function () {

               
    // Rutas para los usuarios (User)
    //Route::resource('usersApi', ApiUserController::class);
    Route::group(['prefix' => 'usersApi'], function () {
        Route::get('/', 'App\Http\Controllers\Api\ApiUserController@index');
        Route::post('/', 'App\Http\Controllers\Api\ApiUserController@store');
        Route::get('/{usersApi}', 'App\Http\Controllers\Api\ApiUserController@show');
        Route::put('/{usersApi}', 'App\Http\Controllers\Api\ApiUserController@update');
        Route::delete('/{usersApi}', 'App\Http\Controllers\Api\ApiUserController@destroy');
        });

    // Rutas para los roles (Role)
    //Route::resource('rolesApi', ApiRoleController::class);
    Route::group(['prefix' => 'rolesApi'], function () {
        Route::get('/', 'App\Http\Controllers\Api\ApiRoleController@index');
        Route::post('/', 'App\Http\Controllers\Api\ApiRoleController@store');
        Route::get('/{rolesApi}', 'App\Http\Controllers\Api\ApiRoleController@show');
        Route::put('/{rolesApi}', 'App\Http\Controllers\Api\ApiRoleController@update');
        Route::delete('/{rolesApi}', 'App\Http\Controllers\Api\ApiRoleController@destroy');
        });


    // Rutas para las publicaciones (Post)
    //Route::resource('postsApi', ApiPostController::class);
    Route::group(['prefix' => 'postsApi'], function () {
        Route::get('/', 'App\Http\Controllers\Api\ApiPostController@index');
        Route::post('/', 'App\Http\Controllers\Api\ApiPostController@store');
        Route::get('/{postsApi}', 'App\Http\Controllers\Api\ApiPostController@show');
        Route::put('/{postsApi}', 'App\Http\Controllers\Api\ApiPostController@update');
        Route::delete('/{postsApi}', 'App\Http\Controllers\Api\ApiPostController@destroy');
        });


    // Rutas para las categorías (Category)
    //Route::resource('categoriesApi', ApiCategoryController::class);
    Route::group(['prefix' => 'categoriesApi'], function () {
        Route::get('/', 'App\Http\Controllers\Api\ApiCategoryController@index');
        Route::post('/', 'App\Http\Controllers\Api\ApiCategoryController@store');
        Route::get('/{categoriesApi}', 'App\Http\Controllers\Api\ApiCategoryController@show');
        Route::put('/{categoriesApi}', 'App\Http\Controllers\Api\ApiCategoryController@update');
        Route::delete('/{categoriesApi}', 'App\Http\Controllers\Api\ApiCategoryController@destroy');
        });

    // Rutas para la tabla pivot entre usuarios y libros (Book User)
    //Route::resource('bookUsersApi', ApiBookUserController::class);
    Route::group(['prefix' => 'bookUsersApi'], function () {
        Route::get('/', 'App\Http\Controllers\Api\ApiBookUserController@index');
        Route::post('/', 'App\Http\Controllers\Api\ApiBookUserController@store');
        Route::get('/{bookUsersApi}', 'App\Http\Controllers\Api\ApiBookUserController@show');
        Route::put('/{bookUsersApi}', 'App\Http\Controllers\Api\ApiBookUserController@update');
        Route::delete('/{bookUsersApi}', 'App\Http\Controllers\Api\ApiBookUserController@destroy');
        });

    // Rutas para préstamos (Book Loan)
    //Route::resource('bookLoansApi', ApiBookLoanController::class);
    Route::group(['prefix' => 'bookLoansApi'], function () {
        Route::get('/', 'App\Http\Controllers\Api\ApiBookLoanController@index');
        Route::post('/', 'App\Http\Controllers\Api\ApiBookLoanController@store');
        Route::get('/{bookLoansApi}', 'App\Http\Controllers\Api\ApiBookLoanController@show');
        Route::put('/{bookLoansApi}', 'App\Http\Controllers\Api\ApiBookLoanController@update');
        Route::delete('/{bookLoansApi}', 'App\Http\Controllers\Api\ApiBookLoanController@destroy');
        });

    // Rutas para los libros (Books)
    //Route::resource('booksApi', ApiBookController::class);
    Route::group(['prefix' => 'booksApi'], function () {
        Route::get('/', 'App\Http\Controllers\Api\ApiBookController@index');
        Route::post('/', 'App\Http\Controllers\Api\ApiBookController@store');
        Route::get('/{booksApi}', 'App\Http\Controllers\Api\ApiBookController@show');
        Route::put('/{booksApi}', 'App\Http\Controllers\Api\ApiBookController@update');
        Route::delete('/{booksApi}', 'App\Http\Controllers\Api\ApiBookController@destroy');
        });


    //});
//});

