<?php
namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function curso()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'codigo_unico' => 'required|string|max:50|unique:cursos,codigo_unico',
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'creditos' => 'required|integer|min:1',
            'horas' => 'required|integer|min:1',
            'estado' => 'required|in:activo,inactivo',
        ]);

        Curso::create($datos);

        return redirect()->route('curso.curso')
            ->with('success', '¡Curso registrado correctamente!');
    }

    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);

        $datos = $request->validate([
            'codigo_unico' => 'required|string|max:50|unique:cursos,codigo_unico,' . $curso->id,
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'creditos' => 'required|integer|min:1',
            'horas' => 'required|integer|min:1',
            'estado' => 'required|in:activo,inactivo',
        ]);

        $curso->update($datos);

        return redirect()->route('curso.curso')
            ->with('success', '¡Curso actualizado correctamente!');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('curso.curso')
            ->with('success', '¡Curso eliminado correctamente!');
    }
}
