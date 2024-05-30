<?php

use App\Http\Controllers\APIBooksController;
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

Route::get("/books", [APIBooksController::class, 'get']);
Route::post("/books", [APIBooksController::class, 'post']);
Route::put("/books", [APIBooksController::class, 'put']);
Route::delete("/books", [APIBooksController::class, 'delete']);



