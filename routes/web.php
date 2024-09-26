<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [\App\Http\Controllers\AuthController::class, 'forgot_password'])->name('forgot_password');
Route::get('/forgot-password/verify', [\App\Http\Controllers\AuthController::class, 'forgot_password_verify'])->name('forgot_password_verify');
Route::get('/signup', [\App\Http\Controllers\AuthController::class, 'signup'])->name('signup');
Route::get('/signup/otp', [\App\Http\Controllers\AuthController::class, 'signup_otp'])->name('signup_otp');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'do_login'])->name('do_login');
Route::post('/signup', [\App\Http\Controllers\AuthController::class, 'do_signup'])->name('do_signup');
Route::post('/signup/otp', [\App\Http\Controllers\AuthController::class, 'signup_verify_otp'])->name('signup_verify_otp');
Route::post('/forgot-password', [\App\Http\Controllers\AuthController::class, 'do_forgot_password'])->name('do_forgot_password');
Route::post('/reset-password', [\App\Http\Controllers\AuthController::class, 'do_password_reset'])->name('do_password_reset');


Route::middleware('user')->group(function(){
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'do_logout'])->name('do_logout');
    Route::get('/user/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});
