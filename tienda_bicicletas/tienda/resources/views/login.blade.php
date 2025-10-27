<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Tienda Bicicletas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom, #000000ff, #340eefff); 
            margin: 0; 
            height: 100vh; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            height: 100vh;
        }
        .login-container {
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        .form-control {
            background-color: rgba(255,255,255,0.8);
            border: none;
        }
        .form-control:focus {
            box-shadow: 0 0 5px #0d6efd;
        }
    </style>
</head>
<body>

   <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow p-5" style="width: 450px; background-color: rgba(0, 0, 0, 0.6); color: white;">
        <h2 class="text-center mb-4">Iniciar Sesión</h2>
       <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            <div class="text-center mt-3">
                <a href="/" class="btn btn-dark w-100">Regresar</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
