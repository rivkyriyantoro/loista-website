<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SubcategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/categories',[CategoryController::class,'getAllCategories']);
Route::get('/categories/{id}',[CategoryController::class,'getCategoryById']);
Route::get('/categories/paginate/{page}',[CategoryController::class,'getCategoriesWithPagination']);

Route::get('/subcategories',[SubcategoryController::class,'getAllSubcategories']);
Route::get('/subcategories/products',[SubcategoryController::class,'getSubcategorywithProducts']);
Route::get('/subcategories/{id}',[SubcategoryController::class,'getSubcategoryById']);
Route::get('/subcategories/{id}/paginate/{page}',[SubcategoryController::class,'getSubcategoryByIdWithPagination']);

Route::get('/products',[ProductController::class,'getAllProducts']);
Route::get('/products/{id}',[ProductController::class,'getProductById']);
Route::get('/products/promo/{is_promo}',[ProductController::class,'grtProductByPromoStatus']);


