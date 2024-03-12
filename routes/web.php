<?php


use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
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

// POST
Route::post('/set-cart-session', [SessionController::class, 'setCartSession']);
Route::post('/modify-cart-session', [SessionController::class, 'modifyCartSession']);
Route::post('/order', [OrderController::class, 'createOrder'])->name('order');

// GET
Route::get('/', [HomepageController::class, 'show'])->name('homepage');
Route::get('/catalogue', [CatalogueController::class, 'index'] )->name('catalogue');
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product');
Route::get('/cart', [CartController::class, 'show'])->name('cart');

// Routes that need admin privileges
Route::middleware('admin')->group(function (){
    Route::prefix('admin/product')->group(function (){
        Route::post('/createdb', [ProductAdminController::class, 'createInDB'])->name('product.createInDB');
        Route::post('/updatedb', [ProductAdminController::class, 'updateInDB'])->name('product.updateInDB');
        Route::get('/add', [ProductAdminController::class, 'create'])->name('product.create');
        Route::get('/{product}/update/', [ProductAdminController::class, 'update'])->name('product.update');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
