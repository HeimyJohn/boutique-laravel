<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CatalogueController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomepageController::class, 'show'])->name('homepage');
Route::get('/catalogue', [CatalogueController::class, 'index'] );
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');