<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');

Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');

Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])->name('estudiantes.show');

Route::get('/estudiantes/create', [EstudianteController::class, 'create'])->name('estudiantes.create');

Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');

Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])->name('estudiantes.show');

Route::get('/curso', [CursoController::class, 'curso'])->name('curso.curso');

Route::get('/curso/{id}', [CursoController::class, 'show'])->name('curso.show');