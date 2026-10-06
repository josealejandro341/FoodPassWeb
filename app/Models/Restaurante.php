<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = ['nombre', 'direccion', 'ciudad', 'activo'];

    public function platillos() {
        return $this->hasMany(Platillo::class);
    }
}
