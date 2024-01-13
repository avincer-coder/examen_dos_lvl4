<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_ingreso extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_ingreso',
        'articulos_id',
        'precio_compra',
        'precio_venta',
        'stock_inicial',
        'stock_actual',
        'fecha_produccion',
        'fecha_vencimiento',
    ];

    // Relación con el modelo Articulo
    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'articulos_id');
    }
}
