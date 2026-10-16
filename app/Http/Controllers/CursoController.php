<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function curso()
    {
        return view('curso');
    }

        #public function show($id)
        #{
        #return 'curso seleccionado'. $id;
        #}
}
