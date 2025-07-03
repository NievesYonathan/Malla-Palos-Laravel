<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion_Turnos extends Model
{
    protected $table = 'asignacion_turnos';

    // Permitir la asignación masiva de todos los campos
    protected $guarded = [];

    public $timestamps = false;

    public function turno()
    {
        return $this->belongsTo(Turnos::class, 'turnos_id', 'id_turnos');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuarios_num_doc', 'num_doc');
    }

    public function getTurnoNombreAttribute(): string
    {
        $nombre = $this->turno?->tur_nombre ?? '—';
        $descripcion = $this->turno?->tur_descripcion ?? '';

        return "{$nombre} - {$descripcion}";
    }

    public function getUsuarioNombreAttribute(): string
    {
        return $this->usuario?->usu_nombre ?? '—';
    }
}
