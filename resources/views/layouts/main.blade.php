
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Mi aplicación Laravel')</title>
</head>

<body>

    <header>
        <h1>Gestor de proyectos</h1>

        <nav>
            <a href="{{ route('projects.index') }}">Proyectos</a>
        </nav>

        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>Aplicación de ejemplo - Laravel 13</p>
    </footer>

</body>
</html>
