<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = producto::all();
        return view('dashboard.producto.index', compact('productos'));
    }

    public function create()
    {
        $tipos = TipoProducto::all();
        return view('dashboard.producto.create', compact('tipos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:150',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'stock' => 'nullable|integer',
            'marca' => 'nullable|string|max:100',
            'color' => 'nullable|string|max:50',
            'talla' => 'nullable|string|max:50',
            'tipo_producto_id' => 'required|exists:tipo_producto,id',
            'imagen' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        Producto::create($data);
        return redirect()->route('producto.index');
    }

        public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $tipos = TipoProducto::all();

        return view('dashboard.producto.edit', compact('producto', 'tipos'));
    }

   public function update(Request $request, $id)
{

    $producto = Producto::findOrFail($id);
    $producto->update($request->all());
    return redirect()->route('producto.index');

}

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
    public function show($id)
{
    $producto = Producto::findOrFail($id);
    return view('producto', compact('producto'));
}
}

