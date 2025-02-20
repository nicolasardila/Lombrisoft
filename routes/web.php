<?php
use App\Http\Controllers\CultivosController;
use App\Http\Controllers\InsumosController;
use App\Http\Controllers\HerramientasController;
use App\Models\Herramientas;
use App\Models\Insumos;
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación protegidas por el middleware centralizado
Auth::routes(['middleware' => 'role.redirect']);

// Rutas protegidas por roles
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:pasante'])->group(function () {
    Route::get('/pasante', function () {
        return view('pasante.dashboard');
    })->name('pasante.dashboard');
});

Route::middleware(['auth', 'role:aprendiz'])->group(function () {
    Route::get('/aprendiz', function () {
        return view('aprendiz.dashboard');
    })->name('aprendiz.dashboard');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
Route::get('/welcome', function() {
    return view('welcome');
 })->name('welcome');

Route::get('/admin/formcultivo', [CultivosController::class, 'create'])->name('cultivos.create');
Route::get('/admin/lista',[CultivosController::class, 'index'])->name('cultivos.index');
Route::post('/admin/cultivos/store',[CultivosController::class, 'store'])->name('cultivos.store');
Route::delete('/admin/cultivos/{id}',[CultivosController::class, 'destroy'])->name('cultivos.destroy');
Route::put('/admin/cultivos/{id}',[CultivosController::class, 'update'])->name('cultivos.update');

Route::get('/admin/forminsumo', [InsumosController::class, 'create'])->name('insumos.create');
Route::get('/admin/listai',[InsumosController::class, 'index'])->name('insumos.index');
Route::post('/admin/insumos/store',[InsumosController::class, 'store'])->name('insumos.store');
Route::put('/admin/insumos/{id}',[InsumosController::class, 'update'])->name('insumos.update');
Route::delete('/admin/insumos/{id}',[InsumosController::class, 'destroy'])->name('insumos.destroy');

Route::get('/admin/formherramientas', [HerramientasController::class, 'create'])->name('herramientas.create');
Route::post('/admin/herramientas/store',[HerramientasController::class, 'store'])->name('herramientas.store');
Route::get('/admin/listah',[HerramientasController::class, 'index'])->name('herramientas.index');
Route::put('/admin/herramientas/{id}',[HerramientasController::class, 'update'])->name('herramientas.update');
Route::delete('/admin/herramientas/{id}',[HerramientasController::class, 'destroy'])->name('herramientas.destroy');