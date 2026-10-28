
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudiantes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">

    <div class="max-w-7xl mx-auto">

        <h1 class="text-3xl font-bold text-gray-800 mb-6">
            Lista de estudiantes
        </h1>

        <a href="{{ route('estudiantes.create') }}"
            class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-3 rounded-lg mb-6">
            + Registrar estudiante
        </a>

        <div class="bg-white rounded-xl shadow-lg overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="p-4">DNI</th>
                        <th class="p-4">Nombre</th>
                        <th class="p-4">Apellidos</th>
                        <th class="p-4">Correo</th>
                        <th class="p-4">Estado</th>
                        <th class="p-4">Acción</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @forelse ($estudiantes as $estudiante)
                        <tr class="hover:bg-blue-50">
                            <td class="p-4">{{ $estudiante->dni }}</td>
                            <td class="p-4">{{ $estudiante->nombre }}</td>
                            <td class="p-4">{{ $estudiante->apellidos }}</td>
                            <td class="p-4">{{ $estudiante->correo }}</td>

                            <td class="p-4">
                                <span class="px-3 py-1 rounded-full text-sm
                                    {{ $estudiante->estado === 'activo'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-red-100 text-red-700' }}">
                                    {{ ucfirst($estudiante->estado) }}
                                </span>
                            </td>

                            <td class="p-4">
                                <a href="{{ route('estudiantes.show', $estudiante->id) }}"
                                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                                    Ver detalles
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-6 text-center text-gray-500">
                                No hay estudiantes registrados.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
