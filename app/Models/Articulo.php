<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'codigo',
        'nombre',
        'descripcion',
        'imagen',
        'id_categoria',
        'id_presentacion',
    ];
}
