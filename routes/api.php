<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// [App\Http\Controllers\ProductController::class, 'createProduct']
//Route::post('/user/post/add', [App\Http\Controllers\ProductController::class, 'add'])->middleware('auth');
/**Route::get('/admin/product/{id}/rejected', [App\Http\Controllers\ProductController::class, 'rejected'])->middleware('auth', 'admin');
Route::get('/admin/product/{id}/accepted', [App\Http\Controllers\ProductController::class, 'accepted'])->middleware('auth', 'admin');
Route::get('/user/product/{id}/destroy', [App\Http\Controllers\ProductController::class, 'destroy'])->middleware('auth');
Route::get('/user/post/{id}/details', [App\Http\Controllers\ClientController::class, 'postDetails'])->middleware('auth');
[App\Http\Controllers\ProductController::class, 'index']
 */
Route::get('categories', [App\Http\Controllers\Api\CategoryController::class, 'index']);
Route::get('products', [App\Http\Controllers\Api\ProductController::class, 'index']);
Route::get('products/search/{key}', [App\Http\Controllers\Api\ProductController::class, 'searchProducts']);
Route::get('category/{id}/products', [App\Http\Controllers\Api\ProductController::class, 'productsByCategory']);
Route::post('product/add', [App\Http\Controllers\Api\ProductController::class, 'createProduct']);
Route::post('product/update', [App\Http\Controllers\Api\ProductController::class, 'updateProduct']);
Route::get('product/{id}', [App\Http\Controllers\Api\ProductController::class, 'getProduct']);
Route::get('product/{id}/destroy', [App\Http\Controllers\Api\ProductController::class, 'destroyProduct']);
Route::get('product/{id}/accepted', [App\Http\Controllers\Api\ProductController::class, 'accepted']);
Route::get('product/{id}/rejected', [App\Http\Controllers\Api\ProductController::class, 'rejected']);
