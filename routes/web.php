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
/* Home Page */

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Home Page */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/**test */

Auth::routes();

// admin Routes
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('/admin/category', [App\Http\Controllers\CategoryController::class, 'list'])->middleware('auth', 'admin');
Route::post('/admin/category/add', [App\Http\Controllers\CategoryController::class, 'add'])->middleware('auth', 'admin');
Route::get('/admin/category/{id}/destroy', [App\Http\Controllers\CategoryController::class, 'destroy'])->middleware('auth', 'admin');
Route::post('/admin/category/edit', [App\Http\Controllers\CategoryController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'ProductList'])->middleware('auth', 'admin');
Route::get('/admin/product/{id}/disactive', [App\Http\Controllers\AdminController::class, 'disactive'])->middleware('auth', 'admin');
Route::get('/admin/product/{id}/active', [App\Http\Controllers\AdminController::class, 'active'])->middleware('auth', 'admin');




//TODO client Routes
Route::get('/user/home', [App\Http\Controllers\ClientController::class, 'home'])->middleware('auth');
Route::get('/user/account', [App\Http\Controllers\ProductController::class, 'dashboard'])->middleware('auth');
Route::get('/user/post', [App\Http\Controllers\ProductController::class, 'idPost'])->middleware('auth');
Route::get('/user/product/{id}/destroy', [App\Http\Controllers\ProductController::class, 'destroy'])->middleware('auth');
Route::post('/user/product/edit', [App\Http\Controllers\ProductController::class, 'edit'])->middleware('auth');
Route::post('/product/search', [App\Http\Controllers\ProductController::class, 'search'])->middleware('auth');





