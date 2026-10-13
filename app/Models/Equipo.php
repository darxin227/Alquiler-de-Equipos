<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $fillable = ['codigo','nombre', 'precio', 'estado', 'categoria_id']; 

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function detalleAlquileres(): HasMany
    {
        return $this->hasMany(DetalleAlquiler::class, 'equipo_id');
    }
}
