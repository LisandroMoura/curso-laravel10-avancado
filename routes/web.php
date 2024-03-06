<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::Class, 'index']);
Route::get('/login', [LoginController::Class, 'index']);
Route::post('/login', [LoginController::Class, 'auth'])->name("login");
