<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa un producto alimenticio o combo disponible en una cafetería.
 */
class Platillo extends Model
{
    protected $fillable = ['restaurante_id', 'nombre', 'descripcion', 'precio', 'stock', 'disponible'];

    /**
     * Relación: Un platillo pertenece a un restaurante.
     */
    public function restaurante() {
        return $this->belongsTo(Restaurante::class);
    }

    /**
     * Relación: Un platillo puede estar en muchos detalles de pedido.
     */
    public function detalles() {
        return $this->hasMany(DetallePedido::class);
    }
}