<?php

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\cpriController;
use App\Http\Controllers\EmailControl;
use App\Http\Controllers\productControl;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\technicianController;
use App\Http\Controllers\testedProduct;
use App\Http\Controllers\visitorController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('index');
});

// DASHBOARDS============================================================================================

// Admin Route
Route::get('/admin', [
    admin_controller::class,
    'index'
])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin');

// Technician Route
Route::get('/technician', [
    technicianController::class,
    'index'
])->middleware(['auth', 'verified', 'rolemanager:technician'])->name('technician');

// CPRI Route
Route::get('/cpri', [
    cpriController::class,
    'index'
])->middleware(['auth', 'verified', 'rolemanager:cpri'])->name('cpri');

// User Route
Route::get('/dashboard', [
    visitorController::class,
    'index'
])->middleware(['auth', 'verified', 'rolemanager:user'])->name('dashboard');

//===============================================================================================================
// PRODUCTS RELATED
// ==============================================================================================================

// Products Index
Route::get('/prod', [productControl::class, 'index'])->name('product.index');

// Tested Products Index
Route::get('/testproducts', [testedProduct::class, 'index'])->name('product.tested');

// Upload Form
Route::get('/product/upload', [productControl::class, 'create'])->name('products.create');

// Store (Upload Product)
Route::post('/prod/added', [productControl::class, 'store'])->name('products.store');

// Edit Product Form
Route::get('/product/{id}/edit', [productControl::class, 'edit'])->name('products.edit');

// Update Product
Route::put('/product/{id}', [productControl::class, 'update'])->name('products.update');

// Delete Product
Route::post('/product/{id}', [productControl::class, 'destroy'])->name('products.destroy');

// Delete Users
Route::post('/admin/{id}', [admin_controller::class, 'destroy'])->name('user.destroy');


// ===============================================================================================================
// Error 404
route::fallback(function () {
    return view("error.error");
});


//Email for contacts
Route::post('/contact-submit', [EmailControl::class, 'submit'])->name('contact.submit');

// News Letter Email
Route::post('/newsletter-send', [EmailControl::class, 'sendNewsletter'])->name('newsletter.send');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
