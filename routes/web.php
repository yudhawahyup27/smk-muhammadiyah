<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LandingController;

// 🔓 Public Routes
Route::prefix('/')->group(function () {
    Route::get('/',[LandingController::class,'index'])->name('landing.home');
    Route::get('/alumni', [LandingController::class, 'alumni'])->name('landing.alumni');
    Route::get('/ekstrakulikuler',[LandingController::class,'ekstrakulikuler'])->name('landing.ekstra');
    Route::get('/profile', [LandingController::class,'profile'])->name('landing.profile');
    Route::get('/jurusan', [LandingController::class,'jurusan'])->name('landing.jurusan');
    Route::get('/Fasilitas', [LandingController::class,'fasilitas'])->name('landing.fasilitas');
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

//jurusan
Route::prefix('/jurusan')->group(function () {
    Route::get('/', [JurusanController::class, 'index'])->name('dashboards.jurusan');
    Route::get('/manage/{id?}', [JurusanController::class, 'manage'])->name('dashboards.jurusan.manage');
    Route::post('/store', [JurusanController::class, 'store'])->name('dashboards.jurusan.store');
    Route::put('/update/{id}', [JurusanController::class, 'update'])->name('dashboards.jurusan.update');
    Route::delete('/delete/{id}', [JurusanController::class, 'destroy'])->name('dashboards.jurusan.destroy');
});
Route::prefix('/fasilitas')->group(function () {
    Route::get('/', [FasilitasController::class, 'index'])->name('dashboards.fasilitas');
    Route::get('/manage/{id?}', [FasilitasController::class, 'manage'])->name('dashboards.fasilitas.manage');
    Route::post('/store', [FasilitasController::class, 'store'])->name('dashboards.fasilitas.store');
    Route::put('/update/{id}', [FasilitasController::class, 'update'])->name('dashboards.fasilitas.update');
    Route::delete('/delete/{id}', [FasilitasController::class, 'destroy'])->name('dashboards.fasilitas.destroy');
});

Route::prefix('profile')->group(function () {
    Route::get('/',[ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'storeOrUpdate'])->name('profile.save');
});

});
