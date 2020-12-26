<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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
    return view('pages.home');
});
/*
Route::get('register',function(){
    return view('pages.register');
});
*/
Route::get('home',[MyController::class,'getHome'])->name('home');
Route::get('register',[MyController::class,'getRegister'])->name('register');
Route::post('sign-up',[MyController::class,'postRegister'])->name('sign-up');
Route::get('log-in',[MyController::class,'getLogIn'])->name('log-in');
Route::get('test',function(){
    echo route('duc');
});