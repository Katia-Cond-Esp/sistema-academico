<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $nombreSistema = 'Sistema Academico de Gestión de Estudiantes';
        $framework = 'Laravel';
        $periodo = '2026 - II';
    return view('inicio', compact('nombreSistema', 'framework', 'periodo'));
    }


}
