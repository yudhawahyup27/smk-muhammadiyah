<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstraController;

// 🔓 Public Routes
Route::prefix('/')->group(function () {
    Route::view('/', 'pages.landing.index')->name('landing.home');
    Route::view('/alumni', 'pages.landing.alumni.index')->name('landing.alumni');
});

// 🔐 Auth Routes
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 🔒 Protected Routes (Hanya untuk user login)
Route::prefix('dashboards')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboards');
    // Ekstrakulikuler
    Route::prefix('/ekstra')->group(function (){
        Route::get('/', [EkstraController::class, 'index'])->name('dashboards.ekstra');
        Route::get('/manage', [EkstraController::class, 'manage'])->name('dashboards.ekstra.manage');
    });
});
