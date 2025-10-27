@extends('dashboard.layout')

@section('content')
<div class="container text-center mt-5">
    <h1 class="mb-4 text-white">Bienvenido Administrador </h1>
    <p class="text-white mb-5">Selecciona una opción para administrar los registros</p>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
            <div class="card shadow p-4 border-0" style="background-color: #041754db;">
                <h4 class="mb-3 text-white">Gestión de Productos</h4>
                <p class="text-white">Crea, edita o elimina productos del sistema.</p>
                <a href='producto' class="btn btn-dark w-100">Ir a Productos</a>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow p-4 border-0" style="background-color: #041754db;">
                <h4 class="mb-3 text-white">Gestión de Tipos de Productos</h4>
                <p class="text-white">Administra las categorías o tipos de productos.</p>
                <a href='tipo_producto' class="btn btn-dark w-100">Ir a Tipos de Productos</a>
            </div>
        </div>
    </div>
</div>
@endsection
