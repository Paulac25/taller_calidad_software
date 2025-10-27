<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'marca',
        'color',
        'talla',
        'tipo_producto_id',
        'imagen'
    ];

    public function tipoProducto()
    {
        return $this->belongsTo(TipoProducto::class);
    }
}
