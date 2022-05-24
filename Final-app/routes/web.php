<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\StoreController;
use  App\Http\Controllers\TasnifController;
use  App\Http\Controllers\SuppliersController;


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
    return view('welcome');
});
Route::resource('/Product',ProductController::class);
Route::resource('/Store',StoreController::class);
Route::resource('/Tasnif',TasnifController::class);
Route::resource('/Suppliers',SuppliersController::class);
Route::get('image-upload',[ ProductController::class, 'imageUpload' ])->name('image.upload');
Route::get('image-upload',[ SuppliersController::class, 'imageUpload' ])->name('image.upload');

