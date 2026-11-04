<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;

// LANDING PAGE
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/menu', [LandingController::class, 'menu'])->name('menu');
Route::get('/blog', [LandingController::class, 'blog'])->name('blog');
Route::get('/testimoni', [LandingController::class, 'testimoni'])->name('testimoni');
Route::get('/checkout', [LandingController::class, 'checkout'])->name('checkout');

// ADMIN
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/chart', [AdminController::class, 'chart'])->name('chart');
    Route::get('/form', [AdminController::class, 'form'])->name('form');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::get('/table', [AdminController::class, 'table'])->name('table');
    Route::get('/sweetalert', [AdminController::class, 'sweetalert'])->name('sweetalert');
