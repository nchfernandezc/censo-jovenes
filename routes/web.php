<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('admin/registro/', RegistroController::class);

require __DIR__.'/auth.php';
