<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
Route::get('/about-us',function(){
    return view('abouts');
});
Route::controller(UserController::class)->group(function(){
    Route::get('/Users', [UserController::class,'index']);
    Route::get('/post', [UserController::class,'post']);
    Route::get('/listPost', [UserController::class,'listPost']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
