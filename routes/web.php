<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\ViviendaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('welcome');
});

// Rutas para Zonas
Route::get('/zonas', [ZonaController::class, 'index'])->name('zonas.index');
Route::get('/zonas/create', [ZonaController::class, 'create'])->name('zonas.create');
Route::post('/zonas', [ZonaController::class, 'store'])->name('zonas.store');
Route::get('/zonas/{id}', [ZonaController::class, 'show'])->name('zonas.show');
Route::get('/zonas/{id}/edit', [ZonaController::class, 'edit'])->name('zonas.edit');
Route::put('/zonas/{id}', [ZonaController::class, 'update'])->name('zonas.update');
Route::delete('/zonas/{id}', [ZonaController::class, 'destroy'])->name('zonas.destroy');

// Rutas para Viviendas
Route::get('/viviendas', [ViviendaController::class, 'index'])->name('viviendas.index');
Route::get('/viviendas/create', [ViviendaController::class, 'create'])->name('viviendas.create');
Route::post('/viviendas', [ViviendaController::class, 'store'])->name('viviendas.store');
Route::get('/viviendas/{id}', [ViviendaController::class, 'show'])->name('viviendas.show');
Route::get('/viviendas/{id}/edit', [ViviendaController::class, 'edit'])->name('viviendas.edit');
Route::put('/viviendas/{id}', [ViviendaController::class, 'update'])->name('viviendas.update');
Route::delete('/viviendas/{id}', [ViviendaController::class, 'destroy'])->name('viviendas.destroy');

