<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owners = [
            ['name' => 'José Martínez', 'email' => 'jose.martinez@example.com', 'phone' => '+34 611 123 456', 'observation' => 'Propietario de varias propiedades en la costa.'],
            ['name' => 'Laura Sánchez', 'email' => 'laura.sanchez@example.com', 'phone' => '+34 611 234 567', 'observation' => 'Primera propiedad adquirida en el centro.'],
            ['name' => 'Carlos García', 'email' => 'carlos.garcia@example.com', 'phone' => '+34 611 345 678', 'observation' => 'Busca expandir su portafolio.'],
            ['name' => 'Patricia López', 'email' => 'patricia.lopez@example.com', 'phone' => '+34 611 456 789', 'observation' => 'Propietaria de un apartamento en la montaña.'],
            ['name' => 'Fernando Pérez', 'email' => 'fernando.perez@example.com', 'phone' => '+34 611 567 890', 'observation' => 'Interesado en rentas vacacionales.'],
            ['name' => 'Elena Romero', 'email' => 'elena.romero@example.com', 'phone' => '+34 611 678 901', 'observation' => 'Ha adquirido varias propiedades de lujo.'],
            ['name' => 'Raúl Díaz', 'email' => 'raul.diaz@example.com', 'phone' => '+34 611 789 012', 'observation' => 'En proceso de renovación de su propiedad en la playa.'],
            ['name' => 'Sofía Torres', 'email' => 'sofia.torres@example.com', 'phone' => '+34 611 890 123', 'observation' => 'Amante de la arquitectura moderna, ha adquirido varias propiedades históricas.'],
            ['name' => 'Luis García', 'email' => 'luis.garcia@example.com', 'phone' => '+34 611 901 234', 'observation' => 'Busca maximizar sus inversiones en propiedades comerciales.'],
            ['name' => 'Isabel Fernández', 'email' => 'isabel.fernandez@example.com', 'phone' => '+34 611 012 345', 'observation' => 'Experta en propiedades rurales, está enfocada en el ecoturismo.'],
        ];

        foreach ($owners as $ownerData) {
            Owner::create($ownerData);
        }
    }
}
