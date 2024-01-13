<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'ventas_id',
        'detalle_ingresos_id',
        'cantidad',
        'precio_venta',
        'descuento',
    ];

    // Relaciones con otros modelos
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'ventas_id');
    }

    public function detalleIngreso()
    {
        return $this->belongsTo(Detalle_ingreso::class, 'detalle_ingresos_id');
    }
}
