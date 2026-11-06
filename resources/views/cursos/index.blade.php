
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de cursos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">

    <div class="max-w-7xl mx-auto">

        <h1 class="text-3xl font-bold text-gray-800 mb-6">
            Lista de cursos
        </h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-5">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('curso.create') }}"
           class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-3 rounded-lg mb-6">
            + Registrar curso
        </a>

        <div class="bg-white rounded-xl shadow-lg overflow-x-auto">

            <table class="w-full text-left">

                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="p-4">Código único</th>
                        <th class="p-4">Nombre</th>
                        <th class="p-4">Descripción</th>
                        <th class="p-4">Créditos</th>
                        <th class="p-4">Horas</th>
                        <th class="p-4">Estado</th>
                        <th class="p-4">Acciones</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">

                    @forelse ($cursos as $curso)

                        <tr class="hover:bg-blue-50">

                            <td class="p-4">
                                {{ $curso->codigo_unico }}
                            </td>

                            <td class="p-4">
                                {{ $curso->nombre }}
                            </td>

                            <td class="p-4">
                                {{ $curso->descripcion }}
                            </td>

                            <td class="p-4">
                                {{ $curso->creditos }}
                            </td>

                            <td class="p-4">
                                {{ $curso->horas }}
                            </td>

                            <td class="p-4">
                                <span class="px-3 py-1 rounded-full text-sm
                                    {{ $curso->estado === 'activo'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-red-100 text-red-700' }}">

                                    {{ ucfirst($curso->estado) }}

                                </span>
                            </td>

                            <td class="p-4">
                                <div class="flex flex-wrap gap-2">

                                    <a href="{{ route('curso.show', $curso->id) }}"
                                       class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-lg">
                                        Ver
                                    </a>

                                    <a href="{{ route('curso.edit', $curso->id) }}"
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg">
                                        Editar
                                    </a>

                                    <form action="{{ route('curso.destroy', $curso->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('¿Estás seguro de eliminar este curso?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded-lg">
                                            Eliminar
                                        </button>

                                    </form>

                                </div>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="p-6 text-center text-gray-500">
                                No hay cursos registrados.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>
