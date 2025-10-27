@extends('dashboard.layout')

@section('content')
<style>
    body {
        background-color: #0d6efd;
        color: white;
        min-height: 100vh;
    }
    .container {
        max-width: 800px;
    }
    form {
        background-color: rgba(33, 37, 41, 0.95);
        color: white;
    }
    .form-label {
        color: #ffffff;
    }
</style>

<div class="container mt-5">
    <h2 class="text-center mb-4">Tipo de Producto</h2>

    <form action="{{ route('tipo_producto.store') }}" method="POST" class="p-4 shadow rounded">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <input type="text" name="descripcion" class="form-control" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4">Guardar</button>
            <a href="{{ route('tipo_producto.index') }}" class="btn btn-primary px-4">Cancelar</a>
        </div>
    </form>
</div>
@endsection
