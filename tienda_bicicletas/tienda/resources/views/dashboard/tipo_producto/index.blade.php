@extends('dashboard.layout')

@section('content')
<style>
    
    body {
        background: linear-gradient(135deg, #000949ff, #afcdebff, #0c0596ff);
        min-height: 100vh;
        color: #fff;
    }

    
    .btn-custom {
        background-color: #012760ff;
        color: #fff;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #1565c0;
        color: #fff;
    }

    
    .table thead {
        background-color: #0d47a1;
        color: #ffffff;
    }

    /
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
    <h2 class="mb-4 text-center text-dark">Listado</h2>

    {{-- Botones superiores --}}
    <div class=" justify-content-between mb-3">
        <a href="{{ route('tipo_producto.create') }}" class="btn btn-custom">Nuevo Tipo</a>
        <a href="{{ route('dashboard') }}" class="btn btn-custom">Volver</a>
    </div>

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    {{-- Mensaje de error --}}
    @if(session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @endif

    {{-- Tabla de tipos --}}
    <table class="table table-bordered table-dark text-center rounded-3 overflow-hidden">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tipoproductos as $tipo)
                <tr>
                    <td>{{ $tipo->id }}</td>
                    <td>{{ $tipo->nombre }}</td>
                    <td>{{ $tipo->descripcion }}</td>
                    <td>
                        <a href="{{ route('tipo_producto.edit', $tipo->id) }}" class="btn btn-primary btn-sm text-white">Editar</a>
                        <form action="{{ route('tipo_producto.destroy', $tipo->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este tipo de producto?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
