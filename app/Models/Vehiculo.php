<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'marca',
        'modelo',
        'anio',
        'placas',
        'capacidad',
        'precio_renta',
        'estado',
        'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class)
                    ->withTimestamps();
    }
}

