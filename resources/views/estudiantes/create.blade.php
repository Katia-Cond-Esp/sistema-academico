
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar estudiante</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-3xl mx-auto">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-blue-700 mb-2">
                Registrar estudiante
            </h1>

            <p class="text-gray-500 mb-6">
                Completa los datos del nuevo estudiante.
            </p>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-5">
                    <p class="font-bold mb-2">
                        Revisa los siguientes errores:
                    </p>
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('estudiantes.store') }}"
                  method="POST"
                  class="space-y-5">

                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <div>
                        <label for="dni" class="block font-semibold text-gray-700 mb-2">
                            DNI
                        </label>
                        <input type="text" id="dni" name="dni"
                               value="{{ old('dni') }}"
                               maxlength="8" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label for="nombre" class="block font-semibold text-gray-700 mb-2">
                            Nombre
                        </label>
                        <input type="text" id="nombre" name="nombre"
                               value="{{ old('nombre') }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label for="apellidos" class="block font-semibold text-gray-700 mb-2">
                            Apellidos
                        </label>
                        <input type="text" id="apellidos" name="apellidos"
                               value="{{ old('apellidos') }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label for="correo" class="block font-semibold text-gray-700 mb-2">
                            Correo electrónico
                        </label>
                        <input type="email" id="correo" name="correo"
                               value="{{ old('correo') }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label for="telefono" class="block font-semibold text-gray-700 mb-2">
                            Teléfono
                        </label>
                        <input type="text" id="telefono" name="telefono"
                               value="{{ old('telefono') }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label for="fecha_nacimiento" class="block font-semibold text-gray-700 mb-2">
                            Fecha de nacimiento
                        </label>
                        <input type="date" id="fecha_nacimiento"
                               name="fecha_nacimiento"
                               value="{{ old('fecha_nacimiento') }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <div class="md:col-span-2">
                        <label for="estado" class="block font-semibold text-gray-700 mb-2">
                            Estado
                        </label>
                        <select id="estado" name="estado" required
                                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                            <option value="activo" @selected(old('estado', 'activo') === 'activo')>
                                Activo
                            </option>
                            <option value="inactivo" @selected(old('estado') === 'inactivo')>
                                Inactivo
                            </option>
                        </select>
                    </div>

                </div>

                <div class="flex flex-wrap gap-3 pt-4">

                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                        Guardar estudiante
                    </button>

                    <a href="{{ route('estudiantes.index') }}"
                       class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-6 py-3 rounded-lg transition">
                        Volver a la lista
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>
