
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar curso</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-3xl mx-auto">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-yellow-600 mb-2">
                Editar curso
            </h1>

            <p class="text-gray-500 mb-6">
                Modifica la información del curso seleccionado.
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

            <form action="{{ route('curso.update', $curso->id) }}"
                  method="POST"
                  class="space-y-5">

                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <!-- Código único -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Código único
                        </label>

                        <input type="text"
                               name="codigo_unico"
                               value="{{ old('codigo_unico', $curso->codigo_unico) }}"
                               maxlength="50"
                               required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-yellow-500 outline-none">
                    </div>

                    <!-- Nombre -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Nombre del curso
                        </label>

                        <input type="text"
                               name="nombre"
                               value="{{ old('nombre', $curso->nombre) }}"
                               required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-yellow-500 outline-none">
                    </div>

                    <!-- Descripción -->
                    <div class="md:col-span-2">
                        <label class="block font-semibold text-gray-700 mb-2">
                            Descripción
                        </label>

                        <textarea name="descripcion"
                                  rows="4"
                                  required
                                  class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-yellow-500 outline-none">{{ old('descripcion', $curso->descripcion) }}</textarea>
                    </div>

                    <!-- Créditos -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Créditos
                        </label>

                        <input type="number"
                               name="creditos"
                               value="{{ old('creditos', $curso->creditos) }}"
                               min="1"
                               required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-yellow-500 outline-none">
                    </div>

                    <!-- Horas -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">
                            Horas
                        </label>

                        <input type="number"
                               name="horas"
                               value="{{ old('horas', $curso->horas) }}"
                               min="1"
                               required
                               class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-yellow-500 outline-none">
                    </div>

                    <!-- Estado -->
                    <div class="md:col-span-2">
                        <label class="block font-semibold text-gray-700 mb-2">
                            Estado
                        </label>

                        <select name="estado"
                                required
                                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-yellow-500 outline-none">

                            <option value="activo"
                                {{ old('estado', $curso->estado) === 'activo' ? 'selected' : '' }}>
                                Activo
                            </option>

                            <option value="inactivo"
                                {{ old('estado', $curso->estado) === 'inactivo' ? 'selected' : '' }}>
                                Inactivo
                            </option>

                        </select>
                    </div>

                </div>

                <!-- Botones -->
                <div class="flex flex-wrap gap-3 pt-4">

                    <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-6 py-3 rounded-lg transition">
                        Actualizar curso
                    </button>

                    <a href="{{ route('curso.curso') }}"
                       class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-6 py-3 rounded-lg transition">
                        Cancelar
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>
