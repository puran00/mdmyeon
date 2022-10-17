<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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
    })->name('welcome');


Route::post('/registration/save',[UserController::class,'RegSave'])->name('RegSave');

Route::get('/registration',[PageController::class,'RegPage'])->name('RegPage');
Route::post('/registration', [UserController::class,'register'])->name('register');

Route::get('/auth', [PageController::class,'auth'])->name('auth');
Route::post('/auth', [UserController::class,'authorization'])->name('authorization');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::group(['middleware'=>['auth','admin'],'prefix'=>'admin'], function (){
    Route::get('/admin', [PageController::class,'admin'])->name('admin');

    Route::get('/new_category',[PageController::class, 'newCategory'])->name('newCategory');
    Route::post('/new_category',[\App\Http\Controllers\CategoryController::class, 'addCategory'])->name('addCategory');


    Route::get('category/edit/{category}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('CategoryEditPage');
    Route::put('category/edit/save/{category}',[\App\Http\Controllers\CategoryController::class, 'update'])->name('CategoryEditSave');
});


