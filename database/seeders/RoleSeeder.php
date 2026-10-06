<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

/**
 * Clase encargada de poblar la base de datos con los roles iniciales del sistema.
 */
class RoleSeeder extends Seeder
{
    /**
     * Ejecuta las semillas (datos iniciales).
     */
    public function run(): void
    {
        Role::create(['nombre' => 'Administrador', 'descripcion' => 'Control total del sistema']);
        Role::create(['nombre' => 'Cafetería', 'descripcion' => 'Gestión de menús y ventas']);
        Role::create(['nombre' => 'Aprendiz', 'descripcion' => 'Usuario con beneficios alimentarios']);
        Role::create(['nombre' => 'Soporte', 'descripcion' => 'Mantenimiento y tickets']);
    }
}