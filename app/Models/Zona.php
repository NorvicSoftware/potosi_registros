<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        // Agrega aquí otros atributos si es necesario
    ];

    // Relación "uno a muchos" con Vivienda
    public function viviendas()
    {
        return $this->hasMany(Vivienda::class, 'zona_id');
    }
}
