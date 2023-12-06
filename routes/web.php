<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();

/* Home Page */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\HomeController::class, 'homeCategories']);
Route::get('/contact', [App\Http\Controllers\ClientController::class, 'contact']);
Route::post('/product/search', [App\Http\Controllers\ProductController::class, 'search']);
Route::post('homeCategories/product/search', [App\Http\Controllers\HomeController::class, 'searchProducts']);
Route::get('homeCategories/productsByCategory/{id}', [App\Http\Controllers\HomeController::class, 'productsByCategory'])
    ->name('products.by.category.show');
Route::get('homeCategories/products', [App\Http\Controllers\HomeController::class, 'getAllProducts'])
    ->name('products.show');


// admin Routes
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);

//CategoryController Routes
Route::get('/admin/category', [App\Http\Controllers\CategoryController::class, 'list'])->middleware('auth', 'admin');
Route::post('/admin/category/add', [App\Http\Controllers\CategoryController::class, 'add'])->middleware('auth', 'admin');
Route::get('/admin/category/{id}/destroy', [App\Http\Controllers\CategoryController::class, 'destroy'])->middleware('auth', 'admin');
Route::post('/admin/category/edit', [App\Http\Controllers\CategoryController::class, 'update'])->middleware('auth', 'admin');

//ProductController Routes
Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'ProductList'])->middleware('auth', 'admin');
Route::get('/admin/product/{id}/rejected', [App\Http\Controllers\ProductController::class, 'rejected'])->middleware('auth', 'admin');
Route::get('/admin/product/{id}/accepted', [App\Http\Controllers\ProductController::class, 'accepted'])->middleware('auth', 'admin');
Route::get('/user/product/{id}/destroy', [App\Http\Controllers\ProductController::class, 'destroy'])->middleware('auth');
Route::post('/user/product/edit', [App\Http\Controllers\ProductController::class, 'edit'])->middleware('auth');
Route::get('/user/account', [App\Http\Controllers\ProductController::class, 'dashboard'])->middleware('auth');
Route::get('/user/post/getAddPostForm', [App\Http\Controllers\ProductController::class, 'getAddPostForm'])->middleware('auth');
Route::post('/user/post/add', [App\Http\Controllers\ProductController::class, 'add'])->middleware('auth');





//TODO ClientController Routes
//Route::get('/user/home', [App\Http\Controllers\ClientController::class, 'home'])->middleware('auth');
