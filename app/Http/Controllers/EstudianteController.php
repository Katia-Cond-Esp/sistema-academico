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
        $datos = $request->validate([
            'dni' => requireddni,
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|max:255|unique:estudiantes,correo',
            'telefono' => 'required|string|max:20',
            'fecha_nacimiento' => 'required|date',
            'estado' => 'required|in:activo,inactivo',
        ]);

        Estudiante::create($datos);

        return redirect()
            ->route('estudiantes.index')
            ->with('success', '¡Estudiante registrado correctamente!');
    }
}