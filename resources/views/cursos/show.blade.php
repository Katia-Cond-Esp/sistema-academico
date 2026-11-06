
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del curso</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">

    <div class="max-w-3xl mx-auto">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                Detalle del curso
            </h1>

            <p class="text-gray-500 mb-8">
                Información del curso registrado.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <p class="text-sm text-gray-500">Código único</p>
                    <p class="font-semibold text-gray-800">
                        {{ $curso->codigo_unico }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Nombre</p>
                    <p class="font-semibold text-gray-800">
                        {{ $curso->nombre }}
                    </p>
                </div>

                <div class="md:col-span-2">
                    <p class="text-sm text-gray-500">Descripción</p>
                    <p class="font-semibold text-gray-800">
                        {{ $curso->descripcion }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Créditos</p>
                    <p class="font-semibold text-gray-800">
                        {{ $curso->creditos }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Horas</p>
                    <p class="font-semibold text-gray-800">
                        {{ $curso->horas }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Estado</p>

                    <span class="inline-block mt-1 px-3 py-1 rounded-full text-sm
                        {{ $curso->estado === 'activo'
                            ? 'bg-green-100 text-green-700'
                            : 'bg-red-100 text-red-700' }}">

                        {{ ucfirst($curso->estado) }}

                    </span>
                </div>

            </div>

            <div class="mt-8">
                <a href="{{ route('curso.curso') }}"
                   class="inline-block bg-gray-700 hover:bg-gray-800 text-white px-5 py-2 rounded-lg">
                    Volver a la lista
                </a>
            </div>

        </div>

    </div>

</body>
</html>
