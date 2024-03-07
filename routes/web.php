<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
// Route to controller : indicate controller class and function
Route::get('/catalogue', [CatalogueController::class, 'index'] );
=======
>>>>>>> dev
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');
