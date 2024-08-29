<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/loginUser',[LoginController::class,'loginUser'])->name('loginUser');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/registerUser',[RegisterController::class,'registerUser'])->name('registerUser');