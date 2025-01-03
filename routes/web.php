<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GalleryController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;


// Menambahkan rute home dengan nama 'home'
// routes/web.php


// Rute home
Route::get('/home', function () {
    return view('home'); // Pastikan ada file 'home.blade.php'
})->name('home');

// Rute root yang mengarah ke /home
Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/CompanyProfile', function () {
    return view('page.CompanyProfile'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('CompanyProfile');

// Rute contacus yang mengarah ke halaman kontak
Route::get('/ProductMain', function () {
    return view('page.ProductMain'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('ProductMain');

Route::get('/ProductTypeRetail', function () {
    return view('page.ProductTypeRetail'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('ProductTypeRetail');

Route::get('/ProductTypeDesign', function () {
    return view('page.ProductTypeDesign'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('ProductTypeDesign');

Route::get('/ProductPerCatalog', function () {
    return view('page.ProductPerCatalog'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('ProductPerCatalog');

Route::get('/ProductDetail', function () {
    return view('page.ProductDetail'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('ProductDetail');

Route::get('/InfoPromotions', function () {
    return view('page.InfoPromotions'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('InfoPromotions');

Route::get('/BlogDetail', function () {
    return view('page.BlogDetail'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('BlogDetail');

Route::get('/Gallery', function () {
    return view('page.Gallery'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('Gallery');

Route::get('/gallery/{id}', function ($id) {
    return view('page.GalleryDetail', ['id' => $id]);
})->name('gallery.detail');

Route::get('/OurProject', function () {
    return view('page.OurProject'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('OurProject');

Route::get('/OurProjectDetail', function () {
    return view('page.OurProjectDetail'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('OurProjectDetail');

Route::get('/ContactUs', function () {
    return view('page.ContactUs'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('ContactUs');

Route::get('/StepOrder', function () {
    return view('page.StepOrder'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('StepOrder');

Route::get('/Test', function () {
    return view('page.Test'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
})->name('Test');



// Route::get('/GalleryDetail', function () {
//     return view('page.GalleryDetail'); // Pastikan file 'contacus.blade.php' ada di folder 'resources/views/page'
// })->name('GalleryDetail');

// Halaman login dan yang memerlukan otentikasi
Route::post('/login', [LoginController::class, 'login'])->name('login.admin');

Route::group(['middleware' => 'checkAuth'], function () {
    // Rute-rute yang memerlukan login
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout.admin');
    // dll...
});

    // Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/data', [CategoryController::class, 'data']);
    Route::post('/category/ubah/{id}', [CategoryController::class, 'ubah'])->whereNumber('id');
    Route::post('/category/hapus/{id}', [CategoryController::class, 'hapus'])->whereNumber('id');

    // Subcategory
    Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('subcategory');
    Route::post('/subcategory', [SubcategoryController::class, 'store'])->name('subcategory.store');
    Route::get('/subcategory/data', [SubcategoryController::class, 'data']);
    Route::post('/subcategory/ubah/{id}', [SubcategoryController::class, 'ubah'])->whereNumber('id');
    Route::post('/subcategory/hapus/{id}', [SubcategoryController::class, 'hapus'])->whereNumber('id');
    Route::get('/category/reload', [SubcategoryController::class, 'reloadCategory']);

    // Product
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/data', [ProductController::class, 'data']);
    Route::get('/product/ubah/{id}', [ProductController::class, 'edit']);
    Route::post('/product/ubah/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::post('/product/hapus/{id}', [ProductController::class, 'hapus'])->whereNumber('id');
    Route::get('/subcategory/reload', [ProductController::class, 'reloadSubcategory']);

