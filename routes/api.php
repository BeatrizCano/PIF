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
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    Route::prefix('v1')->group(function () {

    Route::resource('usersApi', ApiUserController::class);

    Route::resource('rolesApi', ApiRoleController::class);

    Route::resource('postsApi', ApiPostController::class);

    Route::resource('categoriesApi', ApiCategoryController::class);

    Route::resource('bookUsersApi', ApiBookUserController::class);

    Route::resource('bookLoansApi', ApiBookLoanController::class);

    Route::resource('booksApi', ApiBookController::class);

    //});
});
