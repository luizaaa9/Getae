<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [NoticiasController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('noticias', NoticiasController::class);

Route::resource('equipe', EquipeController::class);

Route::resource('contato', ContatoController::class);

require __DIR__.'/auth.php';
