<?php

use App\Http\Controllers\CamaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Auth::routes();

// Grupo de rutas para administradores
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Rutas de gestión de camas
    Route::get('/formcamas', [CamaController::class, 'create'])->name('camas.create');
    Route::post('/camas/store', [CamaController::class, 'store'])->name('camas.store');
    Route::get('/listacamas', [CamaController::class, 'index'])->name('camas.index');
    Route::get('/camas/{id_cama}', [CamaController::class, 'show'])->name('camas.show');
    Route::put('/camas/{id_cama}', [CamaController::class, 'update'])->name('camas.update');
    Route::delete('/camas/{id_cama}', [CamaController::class, 'destroy'])->name('camas.destroy');
});

// Grupo de rutas para pasantes
Route::middleware(['auth', 'role:pasante'])->prefix('pasante')->group(function () {
    Route::get('/', function () {
        return view('pasante.dashboard');
    })->name('pasante.dashboard');
});

// Ruta de bienvenida y home
Route::view('/welcome', 'welcome')->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
