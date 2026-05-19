<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libros = [
            // Elmasri - Ejemplares 1, 2, 3
            [
                'isbn' => '978-84-7829-085-7',
                'titulo' => 'Fundamentos de Sistemas de Bases de Datos',
                'autores' => 'Ramez Elmasri y Shamkant B. Navathe',
                'editorial' => 'Pearson',
                'anio_publicacion' => 2007,
                'num_ejemplar' => 1,
            ],
            [
                'isbn' => '978-84-7829-085-7',
                'titulo' => 'Fundamentos de Sistemas de Bases de Datos',
                'autores' => 'Ramez Elmasri y Shamkant B. Navathe',
                'editorial' => 'Pearson',
                'anio_publicacion' => 2007,
                'num_ejemplar' => 2,
            ],
            [
                'isbn' => '978-84-7829-085-7',
                'titulo' => 'Fundamentos de Sistemas de Bases de Datos',
                'autores' => 'Ramez Elmasri y Shamkant B. Navathe',
                'editorial' => 'Pearson',
                'anio_publicacion' => 2007,
                'num_ejemplar' => 3,
            ],

            // Johnson - Ejemplares 1, 2, 3
            [
                'isbn' => '970-613-461-1',
                'titulo' => 'Bases de datos, Modelos, lenguajes, diseño',
                'autores' => 'James L. Johnson',
                'editorial' => 'Oxford',
                'anio_publicacion' => 2000,
                'num_ejemplar' => 1,
            ],
            [
                'isbn' => '970-613-461-1',
                'titulo' => 'Bases de datos, Modelos, lenguajes, diseño',
                'autores' => 'James L. Johnson',
                'editorial' => 'Oxford',
                'anio_publicacion' => 2000,
                'num_ejemplar' => 2,
            ],
            [
                'isbn' => '970-613-461-1',
                'titulo' => 'Bases de datos, Modelos, lenguajes, diseño',
                'autores' => 'James L. Johnson',
                'editorial' => 'Oxford',
                'anio_publicacion' => 2000,
                'num_ejemplar' => 3,
            ],

            // Beynon-Davies - Ejemplares 1, 2, 3
            [
                'isbn' => '978-84-291-4396-6',
                'titulo' => 'Sistemas de bases de datos',
                'autores' => 'Paul Beynon-Davies',
                'editorial' => 'Reverte',
                'anio_publicacion' => 2014,
                'num_ejemplar' => 1,
            ],
            [
                'isbn' => '978-84-291-4396-6',
                'titulo' => 'Sistemas de bases de datos',
                'autores' => 'Paul Beynon-Davies',
                'editorial' => 'Reverte',
                'anio_publicacion' => 2014,
                'num_ejemplar' => 2,
            ],
            [
                'isbn' => '978-84-291-4396-6',
                'titulo' => 'Sistemas de bases de datos',
                'autores' => 'Paul Beynon-Davies',
                'editorial' => 'Reverte',
                'anio_publicacion' => 2014,
                'num_ejemplar' => 3,
            ],

            // Coronel - Ejemplares 1, 2, 3
            [
                'isbn' => '10-607-481-618-2',
                'titulo' => 'Bases de datos, diseño, implementación y administración',
                'autores' => 'Carlos Coronel, Steven Morris, Peter Rob',
                'editorial' => 'CENGAGE Learning',
                'anio_publicacion' => 2011,
                'num_ejemplar' => 1,
            ],
            [
                'isbn' => '10-607-481-618-2',
                'titulo' => 'Bases de datos, diseño, implementación y administración',
                'autores' => 'Carlos Coronel, Steven Morris, Peter Rob',
                'editorial' => 'CENGAGE Learning',
                'anio_publicacion' => 2011,
                'num_ejemplar' => 2,
            ],
            [
                'isbn' => '10-607-481-618-2',
                'titulo' => 'Bases de datos, diseño, implementación y administración',
                'autores' => 'Carlos Coronel, Steven Morris, Peter Rob',
                'editorial' => 'CENGAGE Learning',
                'anio_publicacion' => 2011,
                'num_ejemplar' => 3,
            ],

            // Reinosa - Ejemplares 1, 2, 3
            [
                'isbn' => '978-987-1609-31-4',
                'titulo' => 'Bases de datos',
                'autores' => 'Enrique José Reinosa',
                'editorial' => 'AlfaOmega',
                'anio_publicacion' => 2012,
                'num_ejemplar' => 1,
            ],
            [
                'isbn' => '978-987-1609-31-4',
                'titulo' => 'Bases de datos',
                'autores' => 'Enrique José Reinosa',
                'editorial' => 'AlfaOmega',
                'anio_publicacion' => 2012,
                'num_ejemplar' => 2,
            ],
            [
                'isbn' => '978-987-1609-31-4',
                'titulo' => 'Bases de datos',
                'autores' => 'Enrique José Reinosa',
                'editorial' => 'AlfaOmega',
                'anio_publicacion' => 2012,
                'num_ejemplar' => 3,
            ],

            // Cuadra - Ejemplares 1, 2, 3
            [
                'isbn' => '978-607-707-653-7',
                'titulo' => 'Desarrollo de Bases de Datos',
                'autores' => 'Dolores Cuadra, Elena Castro',
                'editorial' => 'AlfaOmega-RaMa',
                'anio_publicacion' => 2013,
                'num_ejemplar' => 1,
            ],
            [
                'isbn' => '978-607-707-653-7',
                'titulo' => 'Desarrollo de Bases de Datos',
                'autores' => 'Dolores Cuadra, Elena Castro',
                'editorial' => 'AlfaOmega-RaMa',
                'anio_publicacion' => 2013,
                'num_ejemplar' => 2,
            ],
            [
                'isbn' => '978-607-707-653-7',
                'titulo' => 'Desarrollo de Bases de Datos',
                'autores' => 'Dolores Cuadra, Elena Castro',
                'editorial' => 'AlfaOmega-RaMa',
                'anio_publicacion' => 2013,
                'num_ejemplar' => 3,
            ],

            // Sarasa - Ejemplares 1, 2, 3
            [
                'isbn' => '978-84-9116-250-6',
                'titulo' => 'Introducción a las Bases de Datos usando MongoDB',
                'autores' => 'Antonio Sarasa Cabezuelo',
                'editorial' => 'UDG',
                'anio_publicacion' => 2016,
                'num_ejemplar' => 1,
            ],
            [
                'isbn' => '978-84-9116-250-6',
                'titulo' => 'Introducción a las Bases de Datos usando MongoDB',
                'autores' => 'Antonio Sarasa Cabezuelo',
                'editorial' => 'UDG',
                'anio_publicacion' => 2016,
                'num_ejemplar' => 2,
            ],
            [
                'isbn' => '978-84-9116-250-6',
                'titulo' => 'Introducción a las Bases de Datos usando MongoDB',
                'autores' => 'Antonio Sarasa Cabezuelo',
                'editorial' => 'UDG',
                'anio_publicacion' => 2016,
                'num_ejemplar' => 3,
            ],
        ];

        foreach ($libros as $libro) {
            Libro::updateOrCreate(
                [
                    'isbn' => $libro['isbn'],
                    'num_ejemplar' => $libro['num_ejemplar']
                ],
                [
                    'titulo' => $libro['titulo'],
                    'autores' => $libro['autores'],
                    'editorial' => $libro['editorial'],
                    'anio_publicacion' => $libro['anio_publicacion'],
                ]
            );
        }
    }
}