
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar curso</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-3xl mx-auto">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-blue-700 mb-2">
                Registrar curso
            </h1>

            <p class="text-gray-500 mb-6">
                Completa los datos del nuevo curso.
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

            <form action="{{ route('curso.store') }}"
                  method="POST"
                  class="space-y-5">

                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <!-- Código único -->
                    <div>
                        <label for="codigo_unico"
                               class="block font-semibold text-gray-700 mb-2">
                            Código único
                        </label>

                        <input type="text"
                               id="codigo_unico"
                               name="codigo_unico"
                               value="{{ old('codigo_unico') }}"
                               required
                               maxlength="50"
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <!-- Nombre -->
                    <div>
                        <label for="nombre"
                               class="block font-semibold text-gray-700 mb-2">
                            Nombre del curso
                        </label>

                        <input type="text"
                               id="nombre"
                               name="nombre"
                               value="{{ old('nombre') }}"
                               required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <!-- Descripción -->
                    <div class="md:col-span-2">
                        <label for="descripcion"
                               class="block font-semibold text-gray-700 mb-2">
                            Descripción
                        </label>

                        <textarea id="descripcion"
                                  name="descripcion"
                                  rows="4"
                                  required
                                  class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">{{ old('descripcion') }}</textarea>
                    </div>

                    <!-- Créditos -->
                    <div>
                        <label for="creditos"
                               class="block font-semibold text-gray-700 mb-2">
                            Créditos
                        </label>

                        <input type="number"
                               id="creditos"
                               name="creditos"
                               value="{{ old('creditos') }}"
                               min="1"
                               required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <!-- Horas -->
                    <div>
                        <label for="horas"
                               class="block font-semibold text-gray-700 mb-2">
                            Horas
                        </label>

                        <input type="number"
                               id="horas"
                               name="horas"
                               value="{{ old('horas') }}"
                               min="1"
                               required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>

                    <!-- Estado -->
                    <div class="md:col-span-2">
                        <label for="estado"
                               class="block font-semibold text-gray-700 mb-2">
                            Estado
                        </label>

                        <select id="estado"
                                name="estado"
                                required
                                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">

                            <option value="activo"
                                {{ old('estado', 'activo') === 'activo' ? 'selected' : '' }}>
                                Activo
                            </option>

                            <option value="inactivo"
                                {{ old('estado') === 'inactivo' ? 'selected' : '' }}>
                                Inactivo
                            </option>

                        </select>
                    </div>

                </div>

                <!-- Botones -->
                <div class="flex flex-wrap gap-3 pt-4">

                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                        Guardar curso
                    </button>

                    <a href="{{ route('curso.curso') }}"
                       class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-6 py-3 rounded-lg transition">
                        Volver a la lista
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>
