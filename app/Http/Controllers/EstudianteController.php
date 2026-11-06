<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Importamos el modelo Estudiante.
use App\Models\Estudiante;

// Controlador de estudiantes.

class EstudianteController extends Controller
{
    // Mostrar todos los estudiantes
    public function index()
    {
        $estudiantes = Estudiante::all();

        return view('estudiantes.index', compact('estudiantes'));
    }

    // Mostrar formulario de registro
    public function create()
    {
        return view('estudiantes.create');
    }

    // Guardar un estudiante
    public function store(Request $request)
    {
        $datos = $request->validate([
            'dni' => 'required|string|size:8|unique:estudiantes,dni',
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

    // Mostrar formulario de edición
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);

        return view('estudiantes.edit', compact('estudiante'));
    }

    // Actualizar estudiante
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);

        $datos = $request->validate([
            'dni' => 'required|string|size:8|unique:estudiantes,dni,' . $estudiante->id,
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|max:255|unique:estudiantes,correo,' . $estudiante->id,
            'telefono' => 'required|string|max:20',
            'fecha_nacimiento' => 'required|date',
            'estado' => 'required|in:activo,inactivo',
        ]);

        $estudiante->update($datos);

        return redirect()
            ->route('estudiantes.index')
            ->with('success', '¡Estudiante actualizado correctamente!');
    }

    // Mostrar detalles
    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);

        return view('estudiantes.show', compact('estudiante'));
    }

    // Eliminar estudiante
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);

        $estudiante->delete();

        return redirect()
            ->route('estudiantes.index')
            ->with('success', '¡Estudiante eliminado correctamente!');
    }
}
