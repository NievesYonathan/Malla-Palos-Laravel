<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seguridad extends Model
{
    protected $primaryKey = "id_seguridad";
    // Permitir la asignación masiva de todos los campos
    protected $guarded = [];

    public $timestamps = false;

    // Relaciones
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuarios::class, "seg_usuario_id", "num_doc");
    }
}
