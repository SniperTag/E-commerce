<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NavBarController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;


Route::get('/home',[HomeController::class,'home'])->name('home.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

Route::get('/shop.product', [ShopController::class, 'product']);

Route::get('/navbar.whyus', [NavBarController::class, 'whyus']);

Route::get('/navbar.testimonies',[NavBarController::class, 'testimonies']);

Route::get('/navbar.contact', [NavBarController::class, 'contact']);

require __DIR__.'/auth.php';
                    //Category Route
Route::get('view_category', [AdminController::class, 'view_category']);
Route::post('add_category', [AdminController::class, 'add_category']);
Route::get('delete_category/{id}', [AdminController::class, 'delete_category']);
Route::get('edit_category/{id}', [AdminController::class, 'edit_category']);
Route::post('update_category/{id}', [AdminController::class, 'update_category']);

                //Product Route
Route::get('add_product', [AdminController::class, 'add_product']);
Route::post('upload_product', [AdminController::class, 'upload_product']);
Route::get('view_product', [AdminController::class, 'view_product']);
Route::get('update_product/{id}', [AdminController::class, 'update_product']);
Route::post('edit_product/{id}', [AdminController::class, 'edit_product']);
Route::get('delete_product/{id}', [AdminController::class, 'delete_product']);
Route::get('product_search', [AdminController::class, 'product_search']);


