<?php
// ─── database/seeders/EmpleadoSeeder.php ──────────────────────────────────────
// Pasos 8 y 9 - Inserta a Ivonne (777) y Blas (888).
// SQL equivalente:
//   INSERT INTO empleados (codigo, nombre, direccion, telefono, sexo, fecha_nacimiento, turno)
//   VALUES
//     (777, 'Ivonne Lopez', 'Olivos 234', '3344667788', 'F', '2001-10-10', 'Matutino'),
//     (888, 'Blas Gonzalez', 'Cerezos 567', '3311994477', 'M', '1970-02-25', 'Vespertino');
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('empleados')->insert([
            [
                'codigo'           => 777,
                'nombre'           => 'Ivonne Lopez',
                'direccion'        => 'Olivos 234',
                'telefono'         => '3344667788',
                'sexo'             => 'F',
                'fecha_nacimiento' => '2001-10-10',
                'turno'            => 'Matutino',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'codigo'           => 888,
                'nombre'           => 'Blas Gonzalez',
                'direccion'        => 'Cerezos 567',
                'telefono'         => '3311994477',
                'sexo'             => 'M',
                'fecha_nacimiento' => '1970-02-25',
                'turno'            => 'Vespertino',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
        ]);
    }
}
