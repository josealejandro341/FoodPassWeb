<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['user_id', 'restaurante_id', 'total', 'estado'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function restaurante() {
        return $this->belongsTo(Restaurante::class);
    }
}
