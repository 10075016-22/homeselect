<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Confiuraciones iniciales de tablas, permisos y perfiles
            PermissionSeeder::class,
            RoleSeeder::class,

            UserSeeder::class,
            ModuleSeeder::class,
            TypeEmployeeSeeder::class,
            EmployeeSeeder::class,
            ClientSeeder::class,
            OwnersSeeder::class,
            ApartmentsSeeder::class,
            ReservationSeeder::class,
            IncidentsSeeder::class,
            TaskSeeder::class
        ]);
    }
}
