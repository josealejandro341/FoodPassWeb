<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditoriaLog extends Model
{
    protected $fillable = ['user_id', 'accion', 'tabla_afectada', 'valor_anterior', 'valor_nuevo', 'ip_address'];

    protected $casts = [
        'valor_anterior' => 'array',
        'valor_nuevo' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
