<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['codigo', 'nombre_completo', 'telefono', 'correo', 'direccion'];
    public function alquileres(): HasMany
    {
        return $this->hasMany(Alquiler::class);
    }
}
