<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
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
    Route::get('/admin/vista', [RegistroController::class, 'vista'])->name('vista.index');
    //Route::get('/admin/generate-pdf', [PDFController::class, 'generatePDF']);
    Route::get('admin/generar-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generar.pdf');
    Route::get('/admin/registro/{id}/edit', [RegistroController::class, 'edit'])->name('registro.edit');
    Route::patch('/admin/registro/{id}', [RegistroController::class, 'update'])->name('registro.update');
    Route::delete('/admin/registro/{id}', [RegistroController::class, 'destroy'])->name('registro.destroy');

});

Route::resource('admin/registro/', RegistroController::class);

route::get('admin/dashboard', [DashboardController::class, "index"]);

require __DIR__.'/auth.php';
