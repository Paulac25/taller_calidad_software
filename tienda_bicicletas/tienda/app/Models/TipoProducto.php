<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    use HasFactory;

    protected $table = 'tipo_producto';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function producto()
    {
        return $this->hasMany(Producto::class, 'tipo_producto_id');
    }
}


