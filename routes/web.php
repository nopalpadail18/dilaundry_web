<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthApiController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome'); // tampilan resources/views/welcome.blade.php
});
Route::get('/harga', function () {
    return view('harga'); // tampilan resources/views/welcome.blade.php
});
Route::get('/register', function () {
    return view('register'); // tampilan resources/views/welcome.blade.php
});



// Route::get('/login', [AuthApiController::class, 'showLoginForm'])->name('login.form');

// Route::post('/login', [AuthApiController::class, 'login'])->name('login');

// Route::get('/logout', [AuthApiController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
//     $user = session('user');
//     return view('dashboard', compact('user'));
// })->middleware('auth.session');


// Route::get('/login', [AuthApiController::class, 'showLoginForm'])->name('login.form');
// Route::post('/login', [AuthApiController::class, 'login'])->name('login');
// Route::get('/logout', [AuthApiController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
//     $user = session('user');
//     return view('dashboard', compact('user'));
// })->middleware('auth.session');

Route::get('/login', [AuthApiController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthApiController::class, 'login'])->name('login');
Route::get('/logout', [AuthApiController::class, 'logout'])->name('logout');

// REGISTER
Route::get('/register', [AuthApiController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthApiController::class, 'register'])->name('register');

Route::get('/dashboard', function () {
    $user = session('user');
    return view('dashboard', compact('user'));
})->middleware('auth.session');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth.session')
    ->name('dashboard');

// Route::get('/expenditure/{id}', action: [DashboardController::class, 'show'])->name('expenditure.show');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard/detail/{id}', [DashboardController::class, 'show'])->name('dashboard.detail');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard/detail/{id}', [DashboardController::class, 'show'])->name('dashboard.detail');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth.session')
    ->name('dashboard');

Route::get('/dashboard/{id}', [DashboardController::class, 'show'])
    ->middleware('auth.session')
    ->name('dashboard.detail');

    Route::post('/dashboard/store', [DashboardController::class, 'storeExpenditure'])->name('dashboard.store');
