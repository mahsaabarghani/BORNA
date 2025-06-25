<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplexController;
use App\Http\Controllers\MainPgae;

// routes/web.php

/*Route::middleware(['auth'])->group(function () {


});*/
Route::get('/', [MainPgae::class, 'index'])->name('MainPgae');
Route::get('/complexes', [ComplexController::class, 'index'])->name('home');
Route::resource('complexes', ComplexController::class);
Route::get('/complexes', [ComplexController::class, 'index'])
    ->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('complexes', \App\Http\Controllers\ComplexController::class)
    ->middleware(['auth']);
