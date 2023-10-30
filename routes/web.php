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

Route::get('/', function () {
    return view('guest.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

                // admin Routes
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('/admin/category', [App\Http\Controllers\CategoryController::class, 'list'])->middleware('auth','admin');
Route::post('/admin/category/add', [App\Http\Controllers\CategoryController::class, 'add'])->middleware('auth','admin');
Route::get('/admin/category/{id}/destroy', [App\Http\Controllers\CategoryController::class, 'destroy'])->middleware('auth','admin');
Route::post('/admin/category/edit', [App\Http\Controllers\CategoryController::class, 'update'])->middleware('auth','admin');


        // User Route
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);





 // Client Routes
 Route::get('/client/dashboard', [App\Http\Controllers\ClientController::class, 'dashboard']);

