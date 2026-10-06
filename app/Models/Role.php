<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Representa los niveles de acceso y permisos dentro del sistema (ej: Admin, Cafetería).
 */
class Role extends Model
{
    /**
     * Campos permitidos para asignación masiva.
     */
    protected $fillable = ['nombre', 'descripcion'];

    /**
     * Relación: Un rol puede tener muchos usuarios.
     */
    public function users() {
        return $this->hasMany(User::class);
    }
}