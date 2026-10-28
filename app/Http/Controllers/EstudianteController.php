<?php

namespace App\Http\Controllers;

// Importamos el modelo Estudiante.
use App\Models\Estudiante;

// Controlador de estudiantes.
class EstudianteController extends Controller
{
    // Mostrar todos los estudiantes.
    public function index()
    {
        // Consultar todos los registros de MySQL.
        $estudiantes = Estudiante::all();

        // Enviar los registros a la vista index.
        return view(
            'estudiantes.index',
            compact('estudiantes')
        );
    }

    // Mostrar un estudiante mediante su ID.
    public function show($id)
    {
        // Buscar el estudiante en MySQL.
        // Si no existe, Laravel devuelve un error 404.
        $estudiante = Estudiante::findOrFail($id);

        // Enviar los datos a la vista show.
        return view(
            'estudiantes.show',
            compact('estudiante')
        );
    }

    // Mostrar formulario de registro
    public function create()
    {
        return view('estudiantes.create');
    }

    // Guardar estudiante en la base de datos
    public function store(Request $request)
    {
        Estudiante::create([
            'dni' => $request->dni,
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'correo' => $request-> correo,
            'telefono' => $request->telefono,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'estado' => $request-> estado,
        ]);

        

        return redirect()
            ->route('estudiantes.index');
            
    }
}