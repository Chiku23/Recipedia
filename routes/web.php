<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function(){
    return view('templates.about');
})->name('about');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/loginUser', [LoginController::class,'loginUser'])->name('loginUser');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/registerUser', [RegisterController::class,'registerUser'])->name('registerUser');

Route::get('/recipes', [RecipesController::class, 'index'])->name('recipes');
Route::post('/process-form', [RecipesController::class, 'store'])->name('processRecipeForm');