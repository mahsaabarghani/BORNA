<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ShopperController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainPgae::class, 'index']);

Route::middleware(['auth', 'role:superadmin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:manager'])->prefix('manager')->group(function () {
    Route::get('/dashboard', [ManagerController::class,'index'])->name('manager.dashboard');
});

Route::middleware(['auth', 'role:shop_owner'])->prefix('shop')->group(function () {
    Route::get('/dashboard', [ShopperController::class,'index'])->name('shop.dashboard');
});

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/dashboard', [UserController::class,'index'])->name('user.dashboard');
});


require __DIR__.'/auth.php';
