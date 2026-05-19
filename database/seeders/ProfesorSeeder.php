<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesor; // Ajusta el namespace de tu modelo si es necesario
use Carbon\Carbon;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesores = [
            [
                'codigo' => '2314686',
                'nombre' => 'MARISCAL LUGO LUIS FELIPE',
                'direccion' => 'Av. Revolución 1500',
                'telefono' => '3314517287',
                'sexo' => 'M',
                'fecha_nacimiento' => Carbon::parse('1976-07-07')->format('Y-m-d'),
                'departamento' => 'Ciencias Computacionales',
                'correo' => 'felipe.mariscal@academicos.udg.mx',
            ],
            [
                'codigo' => '2934568',
                'nombre' => 'GUERRERO CARLOS ANA JAZMIN', // Corregido el typo "GUERRRO" de la imagen si prefieres, o déjalo igual
                'direccion' => 'Av. Federalismo 1600',
                'telefono' => '3311442299',
                'sexo' => 'F',
                'fecha_nacimiento' => Carbon::parse('1986-03-06')->format('Y-m-d'),
                'departamento' => 'Tecnologías e innovación',
                'correo' => 'ana.guerrero@academicos.udg.mx',
            ],
            [
                'codigo' => '2890231',
                'nombre' => 'RAMIREZ LUGO FRANCISCO JOSUE',
                'direccion' => 'Av. Constitución 1700',
                'telefono' => '3334903175',
                'sexo' => 'M',
                'fecha_nacimiento' => Carbon::parse('1984-03-02')->format('Y-m-d'),
                'departamento' => 'Electro-fotonica',
                'correo' => 'josue.ramirez@academicos.udg.mx',
            ],
            [
                'codigo' => '2790234',
                'nombre' => 'VILLALVAZO LUGO MONICA PAOLA',
                'direccion' => 'Av. Garza Blanca 1800',
                'telefono' => '3411069425',
                'sexo' => 'F',
                'fecha_nacimiento' => Carbon::parse('1984-06-21')->format('Y-m-d'),
                'departamento' => 'Bioingeniería',
                'correo' => 'monica.lugo@academicos.udg.mx',
            ],
        ];

        foreach ($profesores as $profesor) {
            Profesor::updateOrCreate(
                ['codigo' => $profesor['codigo']], // Clave única para buscar
                $profesor                          // Datos a insertar o actualizar
            );
        }
    }
}