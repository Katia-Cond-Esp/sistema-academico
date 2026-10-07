<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión | IESTP Huancavelica</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-100">

    <main class="flex min-h-screen items-center justify-center p-4">

        <div class="grid w-full max-w-6xl overflow-hidden rounded-3xl bg-white shadow-2xl lg:grid-cols-2">

            <!-- ================================= -->
            <!-- PANEL INSTITUCIONAL -->
            <!-- ================================= -->
            <section
                class="relative flex min-h-[600px] flex-col justify-center overflow-hidden bg-gradient-to-br from-blue-800 via-blue-700 to-indigo-800 p-8 text-white sm:p-12 lg:p-16">

                <!-- Decoraciones -->
                <div
                    class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-white/10">
                </div>

                <div
                    class="absolute -bottom-24 -left-20 h-72 w-72 rounded-full bg-white/10">
                </div>

                <div
                    class="absolute right-20 top-1/2 h-32 w-32 -translate-y-1/2 rounded-full bg-blue-400/10">
                </div>


                <div class="relative z-10">

                    <!-- Logo -->
                    <div class="mb-10 flex items-center gap-4">

                        <div
                            class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-white shadow-lg">

                            <span class="text-3xl">
                                🎓
                            </span>

                        </div>

                        <div>
                            <p class="text-xs font-semibold uppercase tracking-widest text-blue-200">
                                Plataforma académica
                            </p>

                            <h1 class="mt-1 text-xl font-bold leading-tight">
                                IESTP Huancavelica
                            </h1>
                        </div>

                    </div>


                    <!-- Título -->
                    <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-blue-200">
                        Bienvenido
                    </p>

                    <h2 class="max-w-lg text-4xl font-bold leading-tight sm:text-5xl">
                        Tu educación,
                        <span class="text-blue-200">
                            siempre contigo.
                        </span>
                    </h2>

                    <p class="mt-6 max-w-lg text-base leading-7 text-blue-100">
                        Accede a tu plataforma académica para consultar
                        tus cursos, calificaciones, horarios y toda la
                        información relacionada con tu formación profesional.
                    </p>


                    <!-- Características -->
                    <div class="mt-10 grid gap-4 sm:grid-cols-2">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/15">
                                📚
                            </div>

                            <div>
                                <p class="text-sm font-semibold">
                                    Cursos
                                </p>

                                <p class="text-xs text-blue-200">
                                    Gestiona tus cursos
                                </p>
                            </div>

                        </div>


                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/15">
                                📝
                            </div>

                            <div>
                                <p class="text-sm font-semibold">
                                    Calificaciones
                                </p>

                                <p class="text-xs text-blue-200">
                                    Consulta tus notas
                                </p>
                            </div>

                        </div>


                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/15">
                                📅
                            </div>

                            <div>
                                <p class="text-sm font-semibold">
                                    Horarios
                                </p>

                                <p class="text-xs text-blue-200">
                                    Revisa tus clases
                                </p>
                            </div>

                        </div>


                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/15">
                                🎓
                            </div>

                            <div>
                                <p class="text-sm font-semibold">
                                    Formación
                                </p>

                                <p class="text-xs text-blue-200">
                                    Tu progreso académico
                                </p>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- Texto inferior -->
                <div class="absolute bottom-6 left-8 right-8 hidden text-xs text-blue-200 lg:block lg:left-16">
                    Instituto de Educación Superior Tecnológico Público de Huancavelica
                </div>

            </section>


            <!-- ================================= -->
            <!-- PANEL LOGIN -->
            <!-- ================================= -->
            <section class="flex items-center bg-white p-8 sm:p-12 lg:p-16">

                <div class="mx-auto w-full max-w-md">

                    <!-- Encabezado -->
                    <div class="mb-8">

                        <div
                            class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-xl">
                            🔐
                        </div>

                        <h2 class="text-3xl font-bold text-slate-800">
                            Iniciar sesión
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Ingresa tus credenciales institucionales
                            para acceder al sistema académico.
                        </p>

                    </div>


                    <!-- Mensaje de error Laravel -->
                    @if ($errors->any())
                        <div class="mb-5 rounded-xl border border-red-200 bg-red-50 p-4">

                            <p class="text-sm font-semibold text-red-700">
                                No se pudo iniciar sesión
                            </p>

                            <ul class="mt-1 text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif


                    <!-- FORMULARIO -->
                    <form
                        action="#"
                        method="POST"
                        class="space-y-5">

                        @csrf


                        <!-- Usuario -->
                        <div>

                            <label
                                for="email"
                                class="mb-2 block text-sm font-semibold text-slate-700">
                                Usuario o correo institucional
                            </label>

                            <div class="relative">

                                <span
                                    class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                                    ✉
                                </span>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="usuario@iestphuancavelica.edu.pe"
                                    autocomplete="email"
                                    class="w-full rounded-xl border border-slate-300 bg-slate-50 py-3.5 pl-11 pr-4 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    required>

                            </div>

                        </div>


                        <!-- Contraseña -->
                        <div>

                            <div class="mb-2 flex items-center justify-between">

                                <label
                                    for="password"
                                    class="text-sm font-semibold text-slate-700">
                                    Contraseña
                                </label>

                                <a
                                    href="#"
                                    class="text-xs font-semibold text-blue-600 transition hover:text-blue-700">
                                    ¿Olvidaste tu contraseña?
                                </a>

                            </div>


                            <div class="relative">

                                <span
                                    class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                                    🔒
                                </span>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="••••••••"
                                    autocomplete="current-password"
                                    class="w-full rounded-xl border border-slate-300 bg-slate-50 py-3.5 pl-11 pr-12 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                    required>


                                <button
                                    type="button"
                                    onclick="togglePassword()"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 transition hover:text-blue-600"
                                    aria-label="Mostrar u ocultar contraseña">

                                    👁️

                                </button>

                            </div>

                        </div>


                        <!-- Recordarme -->
                        <div class="flex items-center">

                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                                class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">

                            <label
                                for="remember"
                                class="ml-2 text-sm text-slate-600">
                                Recordarme
                            </label>

                        </div>


                        <!-- Botón -->
                        <button
                            type="submit"
                            class="w-full rounded-xl bg-blue-600 py-3.5 text-sm font-semibold text-white shadow-lg shadow-blue-200 transition duration-200 hover:bg-blue-700 hover:shadow-blue-300 active:scale-[0.99]">

                            Iniciar sesión

                        </button>

                    </form>


                    <!-- Ayuda -->
                    <div class="mt-8 rounded-2xl bg-slate-50 p-4 text-center">

                        <p class="text-sm text-slate-500">
                            ¿Tienes problemas para ingresar?
                        </p>

                        <a
                            href="#"
                            class="mt-1 inline-block text-sm font-semibold text-blue-600 hover:text-blue-700">
                            Contactar con soporte
                        </a>

                    </div>


                    <!-- Footer -->
                    <div class="mt-8 text-center">

                        <p class="text-xs text-slate-400">
                            © {{ date('Y') }} IESTP Huancavelica
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Sistema Académico Institucional
                        </p>

                    </div>

                </div>

            </section>

        </div>

    </main>


    <!-- Mostrar / ocultar contraseña -->
    <script>

        function togglePassword() {

            const password = document.getElementById('password');

            if (password.type === 'password') {

                password.type = 'text';

            } else {

                password.type = 'password';

            }

        }

    </script>

</body>

</html>
