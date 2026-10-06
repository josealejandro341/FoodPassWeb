<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    protected $fillable = ['restaurante_id', 'nombre', 'descripcion', 'precio', 'stock', 'disponible'];

    public function restaurante() {
        return $this->belongsTo(Restaurante::class);
    }
}
