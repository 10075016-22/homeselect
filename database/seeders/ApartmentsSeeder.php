<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apartments = [
            ['name_apartment' => 'Propiedad 1', 'id_owner' => 1, 'address' => 'Calle Mayor, 12, Madrid', 'room' => 3, 'parking' => 1, 'observation' => 'Apartamento cerca de la plaza principal.'],
            ['name_apartment' => 'Propiedad 2', 'id_owner' => 2, 'address' => 'Avenida de la Constitución, 45, Barcelona', 'room' => 2, 'parking' => 0, 'observation' => 'Apartamento de 2 habitaciones, sin parking.'],
            ['name_apartment' => 'Propiedad 3', 'id_owner' => 3, 'address' => 'Carrer del Carme, 5, Valencia', 'room' => 4, 'parking' => 1, 'observation' => 'Apartamento en el centro de la ciudad, con terraza.'],
            ['name_apartment' => 'Propiedad 4', 'id_owner' => 4, 'address' => 'Gran Vía, 35, Sevilla', 'room' => 3, 'parking' => 1, 'observation' => 'Ideal para familias, con cocina equipada.'],
            ['name_apartment' => 'Propiedad 5', 'id_owner' => 5, 'address' => 'Calle de Alcalá, 22, Madrid', 'room' => 5, 'parking' => 1, 'observation' => 'Apartamento de lujo en zona exclusiva.'],
            ['name_apartment' => 'Propiedad 6', 'id_owner' => 6, 'address' => 'Paseo de la Castellana, 50, Madrid', 'room' => 2, 'parking' => 0, 'observation' => 'Apartamento con vistas a la ciudad, sin parking.'],
            ['name_apartment' => 'Propiedad 7', 'id_owner' => 7, 'address' => 'Carrer de Pau Claris, 8, Barcelona', 'room' => 3, 'parking' => 1, 'observation' => 'Apartamento moderno con acceso a piscina.'],
            ['name_apartment' => 'Propiedad 8', 'id_owner' => 8, 'address' => 'Calle de la Paz, 13, Salamanca', 'room' => 2, 'parking' => 0, 'observation' => 'Apartamento en zona tranquila, ideal para parejas.'],
            ['name_apartment' => 'Propiedad 9', 'id_owner' => 9, 'address' => 'Avenida de las Américas, 2, Madrid', 'room' => 4, 'parking' => 1, 'observation' => 'Apartamento espacioso con garaje privado.'],
            ['name_apartment' => 'Propiedad 10', 'id_owner' => 10, 'address' => 'Calle San Francisco, 23, Zaragoza', 'room' => 3, 'parking' => 0, 'observation' => 'Apartamento económico, ideal para estudiantes.'],
            ['name_apartment' => 'Propiedad 11', 'id_owner' => 1, 'address' => 'Calle de la Palma, 18, Madrid', 'room' => 2, 'parking' => 1, 'observation' => 'Apartamento con terraza y vistas al parque.'],
            ['name_apartment' => 'Propiedad 12', 'id_owner' => 2, 'address' => 'Avenida Diagonal, 112, Barcelona', 'room' => 3, 'parking' => 0, 'observation' => 'Apartamento luminoso, con acceso a transporte público.'],
            ['name_apartment' => 'Propiedad 13', 'id_owner' => 3, 'address' => 'Carrer del Mar, 10, Valencia', 'room' => 2, 'parking' => 1, 'observation' => 'Apartamento moderno y económico, con estacionamiento.'],
            ['name_apartment' => 'Propiedad 14', 'id_owner' => 4, 'address' => 'Calle Larga, 27, Sevilla', 'room' => 4, 'parking' => 1, 'observation' => 'Apartamento amplio, ideal para grupos o familias.'],
            ['name_apartment' => 'Propiedad 15', 'id_owner' => 5, 'address' => 'Calle de Goya, 3, Madrid', 'room' => 3, 'parking' => 0, 'observation' => 'Apartamento acogedor, sin parking, cerca de tiendas y restaurantes.'],
        ];

        foreach ($apartments as $apartmentData) {
            Apartment::create($apartmentData);
        }
    }
}
