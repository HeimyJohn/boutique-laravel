<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route to controller : indicate controller class and function
Route::get('/', [ProductController::class, 'index']);
Route::get('/catalogue', [CatalogueController::class, 'index'] );
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');
