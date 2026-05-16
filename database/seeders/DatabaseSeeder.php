<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Aquí le decimos que ejecute tu archivo de usuarios
        $this->call([
            UsuarioSeeder::class,
        ]);
    }
}
