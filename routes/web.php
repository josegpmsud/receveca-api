<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuario', App\Http\Controllers\UsuarioController::class);
Route::resource('cliente', App\Http\Controllers\ClienteController::class);
Route::resource('vehiculo', App\Http\Controllers\VehiculoController::class);
Route::resource('plan', App\Http\Controllers\PlanController::class);
Route::resource('contrato', App\Http\Controllers\ContratoController::class);
Route::resource('rol', App\Http\Controllers\RolController::class);
Route::resource('marca', App\Http\Controllers\MarcaController::class);
Route::resource('tipo', App\Http\Controllers\TipoController::class);
Route::resource('uso', App\Http\Controllers\UsoController::class);
Route::resource('clase', App\Http\Controllers\ClaseController::class);
Route::resource('color', App\Http\Controllers\ColorController::class);