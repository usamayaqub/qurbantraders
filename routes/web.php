<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[HomeController::class, 'index'])->name('get-home');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/our-team', [HomeController::class, 'teams'])->name('teams');
Route::get('/products', [HomeController::class, 'allProducts'])->name('products');
Route::get('/products/products-detail', [HomeController::class, 'productsDetail'])->name('products-detail');
Route::get('/search', [HomeController::class, 'productSearch'])->name('search');

Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
