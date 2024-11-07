<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            ['name' => 'Luis Fernández', 'email' => 'luis.fernandez@example.com', 'phone' => '+34 610 123 456', 'is_frecuent' => true, 'observation' => 'Cliente frecuente, prefiere vista al mar.', 'status' => true],
            ['name' => 'Ana María Gómez', 'email' => 'ana.gomez@example.com', 'phone' => '+34 610 234 567', 'is_frecuent' => false, 'observation' => 'Primera reserva.', 'status' => true],
            ['name' => 'Carlos Morales', 'email' => 'carlos.morales@example.com', 'phone' => '+34 610 345 678', 'is_frecuent' => true, 'observation' => 'Visita cada verano.', 'status' => true],
            ['name' => 'Lucía Pérez', 'email' => 'lucia.perez@example.com', 'phone' => '+34 610 456 789', 'is_frecuent' => false, 'observation' => 'Sin observaciones.', 'status' => false],
            ['name' => 'Javier Sánchez', 'email' => 'javier.sanchez@example.com', 'phone' => '+34 610 567 890', 'is_frecuent' => true, 'observation' => 'Reservas mensuales.', 'status' => true],
            ['name' => 'Marta Ruiz', 'email' => 'marta.ruiz@example.com', 'phone' => '+34 610 678 901', 'is_frecuent' => false, 'observation' => 'Cliente nuevo.', 'status' => true],
            ['name' => 'Raúl Hernández', 'email' => 'raul.hernandez@example.com', 'phone' => '+34 610 789 012', 'is_frecuent' => false, 'observation' => 'Solicitó cancelación.', 'status' => false],
            ['name' => 'Elena Navarro', 'email' => 'elena.navarro@example.com', 'phone' => '+34 610 890 123', 'is_frecuent' => true, 'observation' => 'Cliente VIP.', 'status' => true],
            ['name' => 'José Castro', 'email' => 'jose.castro@example.com', 'phone' => '+34 610 901 234', 'is_frecuent' => false, 'observation' => 'Requiere asistencia especial.', 'status' => true],
            ['name' => 'Patricia Díaz', 'email' => 'patricia.diaz@example.com', 'phone' => '+34 610 012 345', 'is_frecuent' => true, 'observation' => 'Cliente frecuente, prefiere pago anticipado.', 'status' => true],
        ];

        foreach ($clients as $clientData) {
            Client::create($clientData);
        }
    }
}
