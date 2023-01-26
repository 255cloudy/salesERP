<?php

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
    return view('dashboard-pages/dashboard');
});
Route::get('user/all', [\App\Http\Controllers\UserController::class, 'index']);
Route::post('user/', [\App\Http\Controllers\UserController::class, 'create']);
Route::get('user/delete/{id}', [\App\Http\Controllers\UserController::class, 'delete']);
Route::get('user/update/{id}', [\App\Http\Controllers\UserController::class, 'update']);

Route::get('asset/all', [\App\Http\Controllers\AssetController::class, 'index']);
Route::post('asset/', [\App\Http\Controllers\AssetController::class, 'create']);
Route::get('asset/delete/{id}', [\App\Http\Controllers\AssetController::class, 'delete']);
Route::get('asset/update/{id}', [\App\Http\Controllers\AssetController::class, 'update']);

Route::get('product/all', [\App\Http\Controllers\ProductController::class, 'index']);
Route::post('product/', [\App\Http\Controllers\ProductController::class, 'create']);
Route::get('product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'delete']);
Route::get('product/update/{id}', [\App\Http\Controllers\ProductController::class, 'update']);

Route::get('distributer/all', [\App\Http\Controllers\DistributerController::class, 'index']);
Route::post('distributer/', [\App\Http\Controllers\DistributerController::class, 'create']);
Route::get('distributer/delete/{id}', [\App\Http\Controllers\DistributerController::class, 'delete']);
Route::get('distributer/update/{id}', [\App\Http\Controllers\DistributerController::class, 'update']);

Route::get('sales/all', [\App\Http\Controllers\SaleController::class, 'index']);
Route::post('sales/', [\App\Http\Controllers\SaleController::class, 'create']);
Route::get('sales/delete/{id}', [\App\Http\Controllers\SaleController::class, 'delete']);
Route::get('sales/update/{id}', [\App\Http\Controllers\SaleController::class, 'update']);

Route::get('order/all', [\App\Http\Controllers\OrderController::class, 'index']);
Route::post('order/', [\App\Http\Controllers\OrderController::class, 'create']);
Route::get('order/delete/{id}', [\App\Http\Controllers\OrderController::class, 'delete']);
Route::get('order/update/{id}', [\App\Http\Controllers\OrderController::class, 'update']);

Route::get('expense/all', [\App\Http\Controllers\ExpenseController::class, 'index']);
Route::post('expense/', [\App\Http\Controllers\ExpenseController::class, 'create']);
Route::get('expense/delete/{id}', [\App\Http\Controllers\ExpenseController::class, 'delete']);
Route::get('expense/update/{id}', [\App\Http\Controllers\ExpenseController::class, 'update']);
