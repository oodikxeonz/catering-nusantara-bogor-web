<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Livewire\Admin\CategoryManager;
use App\Livewire\Admin\MenuManager;

// ===== PUBLIC ROUTES =====
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/{slug}', [MenuController::class, 'show'])->name('menu.show');
Route::get('/galeri', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/tentang', [HomeController::class, 'about'])->name('about');

// ===== ADMIN ROUTES =====
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::livewire('/kategori', 'admin.category-manager')->name('category.index');
Route::livewire('/menu', 'admin.menu-manager')->name('menu.index');
    });
});