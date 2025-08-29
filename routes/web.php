<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta del dashboard, requiere autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas del perfil del usuario, requieren autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- Rutas de Administrador ---
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/users', [ProfileController::class, 'index'])
        ->name('admin.users.index')
        ->can('viewAny', \App\Models\User::class);

        Route::get('/admin/users/{user}', [ProfileController::class, 'show'])
        ->name('admin.users.show')
        ->can('view', 'user'); // Usaremos la regla 'view' de la Policy
});

// Incluye las rutas de autenticación (login, registro, etc.)
require __DIR__.'/auth.php';