<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar a RoleSeeder
        $this->call(
            RoleSeeder::class
        );

        // Crea un usuario de prueba cada que se ejecuten migraciones
        User::factory()->create([
            'name' => 'J',
            'email' => 'gerardo.gongora@tecdesoftware.edu.mx',
            'password' => bcrypt('123456')
        ]);
    }
}
