<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        $tipoproductos = TipoProducto::all();
        return view('dashboard.tipo_producto.index', compact('tipoproductos'));
    }

    public function create()
    {
        return view('dashboard.tipo_producto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:45',
            'descripcion' => 'required|string|max:255',
        ]);

        TipoProducto::create($request->all());
        return redirect()->route('tipo_producto.index');
        
    }

    public function edit($id)
    {
        $tipo = TipoProducto::findOrFail($id);
        return view('dashboard.tipo_producto.edit', compact('tipo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:45',
            'descripcion' => 'required|string|max:255',
        ]);

        $tipo = TipoProducto::findOrFail($id);
        $tipo->update($request->all());
        return redirect()->route('tipo_producto.index');
    }

    public function destroy($id)
    {
        try {
            $tipo = TipoProducto::findOrFail($id);
            $tipo->delete();

            return redirect()->route('tipo_producto.index');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('tipo_producto.index');
        }
    }


}
