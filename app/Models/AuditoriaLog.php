<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Registra todos los cambios críticos en el sistema para trazabilidad.
 * Esta tabla garantiza la auditoría de acciones sensibles (canjes SENA, pagos, cambios de usuario).
 */
class AuditoriaLog extends Model
{
    /**
     * Campos permitidos para asignación masiva.
     */
    protected $fillable = ['user_id', 'accion', 'tabla_afectada', 'valor_anterior', 'valor_nuevo', 'ip_address'];

    /**
     * Conversión automática de campos JSON a Array para fácil manejo en PHP.
     */
    protected $casts = [
        'valor_anterior' => 'array', 
        'valor_nuevo' => 'array',
    ];

    /**
     * Relación: El log pertenece al usuario que realizó la acción.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}