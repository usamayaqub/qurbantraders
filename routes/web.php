<?php

use App\Http\Controllers\AdminController;
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
Route::get('/product/{slug}', [HomeController::class, 'productsDetail'])->name('products-detail');
Route::get('/search', [HomeController::class, 'productSearch'])->name('search');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('get-privacy');



Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

Route::post('/contact', [AdminController::class, 'contactUs'])->name('contact.send');



Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('home', [AdminController::class, 'index'])->name('admin.home');
    
    // Categories Routes For Admin
    Route::get('all-categories', [AdminController::class, 'allCategories'])->name('admin.categories');
    Route::get('add-category', [AdminController::class, 'addCategory'])->name('add.category');
    Route::post('add-category', [AdminController::class, 'storeCategory'])->name('insert.category');
    Route::get('edit-category/{id}', [AdminController::class, 'editCategory'])->name('edit.category');
    Route::post('update-category/{id}', [AdminController::class, 'updateCategory'])->name('update.category');
    // Categories Routes For Admin

        // Products Routes For Admin
        Route::get('all-products', [AdminController::class, 'allProducts'])->name('admin.products');
        Route::get('add-product', [AdminController::class, 'addProduct'])->name('add.product');
        Route::post('add-product', [AdminController::class, 'storeProduct'])->name('insert.product');
        Route::get('edit-product/{id}', [AdminController::class, 'editProduct'])->name('edit.product');
        Route::post('update-product/{id}', [AdminController::class, 'updateProduct'])->name('update.product');
        // Products Routes For Admin

    Route::get('all_contact', [AdminController::class, 'indexContact'])->name('contact.index');
    Route::get('inquiries', [AdminController::class, 'indexProductQuery'])->name('inquiry.index');

});




