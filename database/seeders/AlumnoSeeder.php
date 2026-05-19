<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumnos = [
            [
                'codigo' => '2218813479',
                'nombre' => 'AGUILA CONTRERAS DIEGO ALEXANDER',
                'carrera' => 'ICOM',
                'correo' => 'diego@alumnos.udg.mx',
                'direccion' => 'Toledo 2588',
                'telefono' => '3355778899',
                'sexo' => 'M',
                'fecha_nacimiento' => '1999-03-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => '221068861',
                'nombre' => 'AGUSTIN NOE UREÑA PINEDO',
                'carrera' => 'ICOM',
                'correo' => 'agustin.urena6886@alumnos.udg.mx',
                'direccion' => 'Josefa 85',
                'telefono' => '3320202020',
                'sexo' => 'M',
                'fecha_nacimiento' => '2005-10-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => '216103012',
                'nombre' => 'HERNANDEZ GUERRERO BRYAN',
                'carrera' => 'ICOM',
                'correo' => 'bryan@alumnos.udg.mx',
                'direccion' => 'Cadiz 999',
                'telefono' => '3322551100',
                'sexo' => 'M',
                'fecha_nacimiento' => '1999-09-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => '226140499',
                'nombre' => 'OLIVARES NAVARRO NAOMI MONTSERRAT',
                'carrera' => 'ICOM',
                'correo' => 'naomi@alumnos.udg.mx',
                'direccion' => 'Malaga 1010',
                'telefono' => '3355447722',
                'sexo' => 'F',
                'fecha_nacimiento' => '2000-10-22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codigo' => '223120578',
                'nombre' => 'TAPIA SANDOVAL MARIANA LIZBETH',
                'carrera' => 'ICOM',
                'correo' => 'mariana@alumnos.udg.mx',
                'direccion' => 'Valencia 333',
                'telefono' => '3399118822',
                'sexo' => 'F',
                'fecha_nacimiento' => '2000-07-08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('alumnos')->insert($alumnos);
    }
}