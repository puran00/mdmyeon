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

//страницы
Route::get('/', function () {
    return view('welcome');
    })->name('welcome');

Route::get('/registration',[PageController::class,'RegPage'])->name('RegPage');
Route::post('/registration', [UserController::class,'register'])->name('register');

Route::get('/auth', [PageController::class,'auth'])->name('auth');
Route::post('/auth', [UserController::class,'authorization'])->name('authorization');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/admin', [PageController::class,'admin'])->name('admin');

//функции
Route::post('/registration/save',[UserController::class,'RegSave'])->name('RegSave');
