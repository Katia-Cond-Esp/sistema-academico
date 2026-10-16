<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        return view('estudiantes.index');
    }

        public function show($id)
        {
        return 'estudiantes seleccionado'. $id;
        }

}
