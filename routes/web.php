<?php

use App\Http\Controllers\AlumniController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\LandingController;

// 🔓 Public Routes
Route::prefix('/')->group(function () {
    Route::get('/',[LandingController::class,'index'])->name('landing.home');
    Route::view('/alumni', 'pages.landing.alumni.index')->name('landing.alumni');
});

// 🔐 Auth Routes
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Not Protected



// 🔒 Protected Routes (Hanya untuk user login)
Route::prefix('dashboards')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboards');
    // Ekstrakulikuler
   Route::prefix('/ekstra')->group(function () {
    Route::get('/', [EkstraController::class, 'index'])->name('dashboards.ekstra');
    Route::get('/manage/{id?}', [EkstraController::class, 'manage'])->name('dashboards.ekstra.manage');
    Route::post('/store', [EkstraController::class, 'store'])->name('dashboards.ekstra.store');
    Route::put('/update/{id}', [EkstraController::class, 'update'])->name('dashboards.ekstra.update');
    Route::delete('/delete/{id}', [EkstraController::class, 'destroy'])->name('dashboards.ekstra.destroy');
});

// Alumnis
   Route::prefix('/alumni')->group(function () {
    Route::get('/', [AlumniController::class, 'index'])->name('dashboards.alumni');
    Route::get('/manage/{id?}', [AlumniController::class, 'manage'])->name('dashboards.alumni.manage');
    Route::post('/store', [AlumniController::class, 'store'])->name('dashboards.alumni.store');
    Route::put('/update/{id}', [AlumniController::class, 'update'])->name('dashboards.alumni.update');
    Route::delete('/delete/{id}', [AlumniController::class, 'destroy'])->name('dashboards.alumni.destroy');
});
});
