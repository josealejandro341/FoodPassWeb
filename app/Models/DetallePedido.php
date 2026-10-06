<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa una línea específica de un pedido (producto y cantidad).
 */
class DetallePedido extends Model
{
    protected $fillable = ['pedido_id', 'platillo_id', 'cantidad', 'precio_unitario'];

    /**
     * Relación: Un detalle pertenece a un pedido.
     */
    public function pedido() {
        return $this->belongsTo(Pedido::class);
    }

    /**
     * Relación: Un detalle pertenece a un platillo.
     */
    public function platillo() {
        return $this->belongsTo(Platillo::class);
    }
}