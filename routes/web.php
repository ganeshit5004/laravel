<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Homecontroller;
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

Route::group(['middleware'=>'guest'],function(){
Route::get('/register',[Authcontroller::class,'register'])->name('register');
Route::post('/register',[Authcontroller::class,'registerPost'])->name('register');
Route::get('/login',[Authcontroller::class,'login'])->name('login');
Route::post('/login',[Authcontroller::class,'loginPost'])->name('login');
});

Route::group(['middleware'=>'auth'],function(){
Route::get('/home',[Homecontroller::class,'index']);
Route::delete('/logout',[Authcontroller::class,'logout'])->name('logout');
});