<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_venta',
        'clientes_id',
        'trabajadors_id',
        'fecha',
        'tipo_comprobante',
        'serie',
        'correlativo',
        'igv',
        'estado',
    ];

    // Relaciones con otros modelos
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clientes_id');
    }

    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class, 'trabajadors_id');
    }
}
