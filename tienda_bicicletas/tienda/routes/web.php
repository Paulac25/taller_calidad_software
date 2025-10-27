<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login.form');

// POST login que solo redirige al dashboard
Route::post('/login', function () {
    return redirect()->route('dashboard');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');
Route::resource('producto', ProductoController::class);
Route::resource('tipo_producto', TipoProductoController::class);
