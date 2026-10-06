<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa un punto físico de atención o cafetería dentro del ecosistema FoodPass.
 */
class Restaurante extends Model
{
    protected $fillable = ['nombre', 'direccion', 'ciudad', 'activo'];

    /**
     * Relación: Un restaurante tiene muchos platillos.
     */
    public function platillos() {
        return $this->hasMany(Platillo::class);
    }
}