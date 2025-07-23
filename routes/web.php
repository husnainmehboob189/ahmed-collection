<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\categoriesController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\PostController;


Route::get('frontend/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('frontend/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');




// 
Route::get('/frontend/posts', [PostController::class, 'index'])->name('posts.index');


Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('frontend/index1', [HomeController::class, 'index'])->name('home'); // ✅ this matches your controller
Route::get('/blog', [BlogController::class, 'index'])->name('blog');


Route::prefix('frontend')->group(function () {
    Route::resource('products', ProductController::class);
});

Route::prefix('frontend')->group(function () {
    Route::resource('categories', categoriesController::class);
});








Route::get('/', function () {
    return view('frontend.index1');
//    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/frontend/dashboard', [DashboardController::class, 'index'])->name('frontend.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('products/listing', [ProductController::class, 'getProducts'])->name('products.listing');
    

// Product view page
Route::get('frontend/products/view/{id}', [ProductController::class, 'show'])->name('products.view');
Route::put('frontend/products/update/{id}', [ProductController::class, 'update'])->name('products.update');


// Product delete action
Route::delete('frontend/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');
   

});

require __DIR__.'/auth.php';
