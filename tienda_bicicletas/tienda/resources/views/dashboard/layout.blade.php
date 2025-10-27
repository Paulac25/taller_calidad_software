<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <style>
        body {
            background: linear-gradient(to bottom, #022150ff, #ffffff);
            min-height: 100vh;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-3">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Tienda de bicicletas</a>
        <a class="navbar-brand ms-auto" href="/">Regresar</a>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
