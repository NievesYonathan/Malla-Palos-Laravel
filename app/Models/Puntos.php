<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Puntos extends Model
{
    // Permitir la asignación masiva de todos los campos
    protected $guarded = [];

    public $timestamps = false;

    // Relaciones
    public function personalAsignado(): HasMany
    {
        return $this->hasMany(Asignaciones_Personal::class, "punto_origen_id");
    }

    public function inventarioHistorico(): HasMany
    {
        return $this->hasMany(Inventario_Historico::class,"punto_id");
    }
    public function inventarioRegistro(): HasMany
    {
        return $this->hasMany(Inventario_Registros::class,"punto_id");
    }
}
