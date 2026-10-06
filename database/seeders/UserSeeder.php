<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

/**
 * Clase encargada de crear el usuario administrador inicial para acceso al backoffice.
 */
class UserSeeder extends Seeder
{
    /**
     * Ejecuta las semillas (datos iniciales).
     */
    public function run(): void
    {
        $role = Role::where('nombre', 'Administrador')->first();

        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@foodpass.com',
            'password' => Hash::make('12345678'), //Esto es solo para pruebas, en producción se debe cambiar la contraseña inmediatamente.
            'role_id' => $role->id,
            'documento_identidad' => '1000000000',
            'es_beneficiario_sena' => false,
            'estado' => 'activo'
        ]);
    }
}