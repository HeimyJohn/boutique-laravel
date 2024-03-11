<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ProductAddController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomepageController::class, 'show'])->name('homepage');

Route::get('/catalogue', [CatalogueController::class, 'index'] )->name('catalogue');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');
Route::get('/card', [CardController::class, 'show'])->name('card');


// Route pour productadd
Route::post('/product/store', [ProductAddController::class, 'store'])->name('product.store');
Route::get('/admin/product/add', [ProductAddController::class, 'create'])->name('product.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
