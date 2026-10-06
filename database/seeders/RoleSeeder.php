<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['nombre' => 'Administrador', 'descripcion' => 'Control total del sistema']);
        Role::create(['nombre' => 'Cafetería', 'descripcion' => 'Gestión de menús y ventas']);
        Role::create(['nombre' => 'Aprendiz', 'descripcion' => 'Usuario con beneficios alimentarios']);
        Role::create(['nombre' => 'Soporte', 'descripcion' => 'Mantenimiento y tickets']);
    }
}