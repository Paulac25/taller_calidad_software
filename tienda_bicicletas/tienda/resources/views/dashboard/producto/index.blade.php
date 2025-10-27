@extends('dashboard.layout')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #010949ff, #afcdebff, #050158ff);
        min-height: 100vh;
        color: #fff;
    }


    .btn-custom {
        background-color: #022251ff;
        color: #fff;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #0373f3ff;
        color: #fff;
    }


    .table thead {
        background-color: #0d47a1;
        color: #ffffff;
    }

    
    .table tbody tr:nth-child(even) {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .table tbody tr:nth-child(odd) {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .table td, .table th {
        color: #fff;
        vertical-align: middle;
    }

</style>

<div class="container mt-4">
    <h2 class="text-center mb-4 text-dark">Lista de Productos</h2>

    {{-- Mensajes de éxito o error --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="mb-3  justify-content-between">
        <a href="{{ route('producto.create') }}" class="btn btn-custom">Agregar Producto</a>
        <a href="{{ route('dashboard') }}" class="btn btn-custom">Volver</a>
    </div>

    <table class="table table-bordered table-dark align-middle text-center rounded-3 overflow-hidden">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Marca</th>
                <th>Color</th>
                <th>Talla</th>
                <th>Tipo de Producto</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>${{ number_format($producto->precio, 0, ',', '.') }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->marca }}</td>
                    <td>{{ $producto->color }}</td>
                    <td>{{ $producto->talla }}</td>
                    <td>{{ $producto->tipoProducto->nombre ?? 'Sin tipo' }}</td>
                    <td>
                        <a href="{{ route('producto.edit', $producto->id) }}" class="btn btn-primary btn-sm text-white">Editar</a>
                        <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
