<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\PagesController;
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
    return view('Layouts.home');
});

Route::get('home',[PagesController::class,'getHome'])->name('home');
Route::get('register',[MyAccountController::class,'getRegister'])->name('register');
//Route::get('register',[MyController::class,'postRegister'])->name('register');
Route::get('log-in',[MyAccountController::class,'getLogIn'])->name('log-in');
