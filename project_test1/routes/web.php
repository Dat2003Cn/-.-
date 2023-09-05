<?php

use Illuminate\Database\Query\IndexHint;
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
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'   ])->name('index');
Route::match( ['GET','POST'],'/student/add',[App\Http\Controllers\StudentController::class, 'add'])->name('add');
Route::match( ['GET','POST'],'/student/edit/{id}',[App\Http\Controllers\StudentController::class, 'edit'])->name('edit');
Route::match(['GET','POST'], '/student/delete/{id}',[App\Http\Controllers\StudentController::class, 'delete'])->name('delete');