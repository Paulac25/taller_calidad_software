<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BicisMundo | Venta de Bicicletas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .hero {
            background: url('../imagenes/bicicicletap.jpg') center/cover no-repeat;
            color: white;
            text-shadow: 1px 1px 4px #000;
            padding: 250px 0;
        }
    </style>
</head>
<body>

   
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Tienda de Bicicletas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/login">Iniciar Sesión<a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Encuentra tu Bicicleta Ideal</h1>
            <p class="lead">Bicicletas para todos los estilos, edades y aventuras.</p>
            <a href="#" class="btn btn-dark btn-lg mt-3">Ver catálogo</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        &copy; {{ date('Y') }} BicisMundo. Todos los derechos reservados.
    </footer>

</body>
</html>

