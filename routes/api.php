<?php

use App\Http\Controllers\AuthApi;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('/register', [AuthApi::class, 'register']);

Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::get('/user', function () {
        return request()->user();
    });

    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BookController::class);
});
