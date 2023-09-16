<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    use HasFactory;
    protected $fillable = [
        'zona_id',
        'tamanio_m2',
        'habitaciones',
        'banios',
        'autos_parqueo',
        'costo_estimado',
        // Agrega aquí otros atributos si es necesario
    ];

    // Relación "mucho a uno" con Zona
    public function zona()
    {
        return $this->belongsTo(Zona::class, 'zona_id');
    }
}
