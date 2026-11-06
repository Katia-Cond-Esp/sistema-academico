<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [InicioController::class, 'index'])
    ->name('inicio');

// RUTAS DE ESTUDIANTES

Route::get('/estudiantes', [EstudianteController::class, 'index'])
    ->name('estudiantes.index');

Route::get('/estudiantes/create', [EstudianteController::class, 'create'])
    ->name('estudiantes.create');

Route::post('/estudiantes', [EstudianteController::class, 'store'])
    ->name('estudiantes.store');

Route::get('/estudiantes/{id}/edit', [EstudianteController::class, 'edit'])
    ->name('estudiantes.edit');

Route::put('/estudiantes/{id}', [EstudianteController::class, 'update'])
    ->name('estudiantes.update');

Route::delete('/estudiantes/{id}', [EstudianteController::class, 'destroy'])
    ->name('estudiantes.destroy');

Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])
    ->name('estudiantes.show');

// RUTAS DE CURSOS

Route::get('/curso', [CursoController::class, 'curso'])
    ->name('curso.curso');

Route::get('/curso/create', [CursoController::class, 'create'])
    ->name('curso.create');

Route::post('/curso', [CursoController::class, 'store'])
    ->name('curso.store');

Route::get('/curso/{id}/edit', [CursoController::class, 'edit'])
    ->name('curso.edit');

Route::put('/curso/{id}', [CursoController::class, 'update'])
    ->name('curso.update');

Route::delete('/curso/{id}', [CursoController::class, 'destroy'])
    ->name('curso.destroy');

Route::get('/curso/{id}', [CursoController::class, 'show'])
    ->name('curso.show');
