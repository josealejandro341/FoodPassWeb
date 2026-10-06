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
        Schema::create('auditoria_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users'); // Quién hizo el cambio
            $table->string('accion'); // Ej: "ACTUALIZAR_USUARIO", "CANJE_SENA", "PAGO_NEQUI"
            $table->string('tabla_afectada');
            $table->json('valor_anterior')->nullable(); // Antes del cambio
            $table->json('valor_nuevo')->nullable();   // Después del cambio
            $table->string('ip_address')->nullable();  // Rastreo de origen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auditoria_logs');
    }
};
