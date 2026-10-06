<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa una orden de compra realizada por un usuario en un restaurante específico.
 */
class Pedido extends Model
{
    protected $fillable = ['user_id', 'restaurante_id', 'total', 'estado'];

    /**
     * Relación: Un pedido pertenece a un usuario.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación: Un pedido pertenece a un restaurante.
     */
    public function restaurante() {
        return $this->belongsTo(Restaurante::class);
    }

    /**
     * Relación: Un pedido tiene muchos detalles.
     */
    public function detalles() {
        return $this->hasMany(DetallePedido::class);
    }
}