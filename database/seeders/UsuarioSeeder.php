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
                'nombre_del_usuario' => 'administrador',
                'contrasena'         => Hash::make('admin123'),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'nombre_del_usuario' => 'Ivonne',
                'contrasena'         => Hash::make('ivonne123'),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'nombre_del_usuario' => 'Blas',
                'contrasena'         => Hash::make('blas123'),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
        ]);
    }
}
