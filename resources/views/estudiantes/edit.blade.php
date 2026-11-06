
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar estudiante</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-3xl mx-auto">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-yellow-600 mb-2">
                Editar estudiante
            </h1>

            <p class="text-gray-500 mb-6">
                Modifica los datos del estudiante.
            </p>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-5">
                    <p class="font-bold mb-2">Revisa los siguientes errores:</p>
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('estudiantes.update', $estudiante->id) }}"
                  method="POST"
                  class="space-y-5">

                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            DNI
                        </label>
                        <input type="text" name="dni"
                            value="{{ old('dni', $estudiante->dni) }}"
                            maxlength="8" required
                            class="w-full border border-gray-300 rounded-lg p-3">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Nombre
                        </label>
                        <input type="text" name="nombre"
                            value="{{ old('nombre', $estudiante->nombre) }}"
                            required
                            class="w-full border border-gray-300 rounded-lg p-3">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Apellidos
                        </label>
                        <input type="text" name="apellidos"
                            value="{{ old('apellidos', $estudiante->apellidos) }}"
                            required
                            class="w-full border border-gray-300 rounded-lg p-3">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Correo electrónico
                        </label>
                        <input type="email" name="correo"
                            value="{{ old('correo', $estudiante->correo) }}"
                            required
                            class="w-full border border-gray-300 rounded-lg p-3">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Teléfono
                        </label>
                        <input type="text" name="telefono"
                            value="{{ old('telefono', $estudiante->telefono) }}"
                            required
                            class="w-full border border-gray-300 rounded-lg p-3">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Fecha de nacimiento
                        </label>
                        <input type="date" name="fecha_nacimiento"
                            value="{{ old('fecha_nacimiento', $estudiante->fecha_nacimiento) }}"
                            required
                            class="w-full border border-gray-300 rounded-lg p-3">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block font-semibold text-gray-700 mb-2">
                            Estado
                        </label>

                        <select name="estado" required
                            class="w-full border border-gray-300 rounded-lg p-3">

                            <option value="activo"
                                {{ old('estado', $estudiante->estado) === 'activo' ? 'selected' : '' }}>
                                Activo
                            </option>

                            <option value="inactivo"
                                {{ old('estado', $estudiante->estado) === 'inactivo' ? 'selected' : '' }}>
                                Inactivo
                            </option>

                        </select>
                    </div>

                </div>

                <div class="flex flex-wrap gap-3 pt-4">

                    <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-6 py-3 rounded-lg">
                        Actualizar estudiante
                    </button>

                    <a href="{{ route('estudiantes.index') }}"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-6 py-3 rounded-lg">
                        Cancelar
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>
