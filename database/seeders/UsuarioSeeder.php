<?php
// ─── database/seeders/UsuarioSeeder.php ───────────────────────────────────────
// Paso 2 - Inserta los tres usuarios del sistema: administrador, Ivonne y Blas.
// SQL equivalente:
//   INSERT INTO usuarios (nombre_del_usuario, contrasena) VALUES
//     ('administrador', '...'), ('Ivonne', '...'), ('Blas', '...');
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nombre_del_usuario' => 'Administrador',
                'contrasena'         => Hash::make('admin'),
                'rol'         => 'Administrador',
            ],
            [
                'nombre_del_usuario' => 'Ivonne',
                'contrasena'         => Hash::make('1234'),
                'rol'         => 'Empleado',
            ],
            [
                'nombre_del_usuario' => 'Blas',
                'contrasena'         => Hash::make('1234'),
                'rol'         => 'Empleado',
            ],
        ]);
    }
}
