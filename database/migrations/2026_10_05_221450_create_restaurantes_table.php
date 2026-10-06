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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Ej: Cafetería Bloque A
            $table->string('direccion');
            $table->string('ciudad');
            $table->boolean('activo')->default(true); // Para activar/desactivar por suscripción
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};
