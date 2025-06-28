<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seguridad', function (Blueprint $table) {
            $table->increments('id_seguridad');
            $table->string('seg_credencial', 45);
            $table->string('seg_usuario_id', 15)->index('fk_credencial_usu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguridad');
    }
};
