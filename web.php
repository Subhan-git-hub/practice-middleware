<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\ValidUser;
use App\Http\Middleware\TestUser;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/user','user')->name('user');

Route::view('/register','register')->name('register');//from welcome page register button
Route::post('/registerSave',[UsersController::class,'register'])->name('registerSave');//controller


Route::view('/login','login')->name('login');//from welcome page login button
Route::post('/loginPage',[UsersController::class,'login'])->name('loginPage');//controller

Route::get('/index',[UsersController::class,'index'])->name('index')->middleware(['auth']);

Route::get('/index/inner',[UsersController::class,'inner'])->name('inner')->middleware(['auth','user:admin']);

Route::get('/logout',[UsersController::class,'logout'])->name('logout');




