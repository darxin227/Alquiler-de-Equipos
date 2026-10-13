<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['codigo','nombre_completo', 'telefono', 'correo']; 

    public function alquileres(): HasMany
    {
        return $this->hasMany(Alquiler::class);
    }
}
