<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\categoriesController;
use App\Http\Controllers\Frontend\HomeController;

Route::get('frontend/index1', [HomeController::class, 'index']); // ✅ this matches your controller



Route::prefix('frontend')->group(function () {
    Route::resource('products', ProductController::class);
});

Route::prefix('frontend')->group(function () {
    Route::resource('categories', categoriesController::class);
});





Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/frontend/dashboard', [DashboardController::class, 'index'])->name('frontend.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
