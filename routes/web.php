<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/signup', [\App\Http\Controllers\AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [\App\Http\Controllers\AuthController::class, 'do_signup'])->name('do_signup');


Route::get('/user/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
