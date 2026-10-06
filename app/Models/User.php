<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Representa a cualquier usuario registrado en la plataforma (SENA, Empresa, Institución).
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Campos permitidos para asignación masiva.
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'documento_identidad', 'es_beneficiario_sena', 'estado'
    ];

    /**
     * Campos ocultos para evitar exposición en APIs.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Conversión de tipos de datos.
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'es_beneficiario_sena' => 'boolean',
        ];
    }

    /**
     * Relación: Un usuario pertenece a un rol.
     */
    public function role() {
        return $this->belongsTo(Role::class);
    }

    /**
     * Relación: Un usuario puede tener muchos pedidos.
     */
    public function pedidos() {
        return $this->hasMany(Pedido::class);
    }
}