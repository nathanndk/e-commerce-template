<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');


Route::get('/add-to-wishlist', function () {
    return view('add-to-wishlist');
})->middleware(['auth', 'verified'])->name('add-to-wishlist');

Route::get('/cart', function () {
    return view('cart');
})->middleware(['auth', 'verified'])->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->middleware(['auth', 'verified'])->name('checkout');

Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::get('/men', function () {
    return view('men');
})->middleware(['auth', 'verified'])->name('men');

Route::get('/women', function () {
    return view('women');
})->middleware(['auth', 'verified'])->name('women');

Route::get('/product-detail', function () {
    return view('product-detail');
})->middleware(['auth', 'verified'])->name('product-detail');

Route::get('/order-complete', function () {
    return view('order-complete');
})->middleware(['auth', 'verified'])->name('order-complete');

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');
