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
    return view('welcome');
});
Route::get('/product',[App\Http\Controllers\ProductController::class, 'index' ])->name('index');
Route::match(['GET','POST'],'/product/add',[App\Http\Controllers\ProductController::class, 'add' ])->name('add');
// Route::match(['GET','POST'],'/product/eidt/{id}',[App\Http\Controllers\ProductController::class, 'edit' ])->name('edit');
Route::match( ['GET','POST'],'/product/edit/{id}',[App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
Route::match(['GET','POST'],'/product/delete/{id}',[App\Http\Controllers\ProductController::class, 'delete' ])->name('delete');
// $products->update($request->all());