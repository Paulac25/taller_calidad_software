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
    }
    .form-label {
        color: #ffffff;
    }
</style>

<div class="container mt-1">
    <h2 class="mb-4 text-center text-white">Registrar Producto</h2>

    <form action="{{ route('producto.store') }}" method="POST" enctype="multipart/form-data" class="p-4 shadow rounded">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Ej: Bicicleta de montaña">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Escribe una breve descripción del producto..."></textarea>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" step="0.01" required placeholder="Ej: 1200000">
            </div>

            <div class="col-md-4 mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" required placeholder="Ej: 10">
            </div>

            <div class="col-md-4 mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" placeholder="Ej: GW, Trek, Specialized">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" name="color" id="color" class="form-control" placeholder="Ej: Rojo, Azul, Negro">
            </div>

            <div class="col-md-6 mb-3">
                <label for="talla" class="form-label">Talla</label>
                <input type="text" name="talla" id="talla" class="form-control" placeholder="Ej: M, L, XL">
            </div>
        </div>

        <div class="mb-3">
            <label for="tipo_producto_id" class="form-label">Tipo de Producto</label>
            <select name="tipo_producto_id" id="tipo_producto_id" class="form-select" required>
                <option value="">Selecciona un tipo</option>
                @foreach(App\Models\TipoProducto::all() as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4">Guardar Producto</button>
            <a href="{{ route('producto.index') }}" class="btn btn-primary px-4">Cancelar</a>
        </div>
    </form>
</div>
@endsection
