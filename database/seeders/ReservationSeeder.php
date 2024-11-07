<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservations = [
            [
                'id_apartment' => 1,
                'id_client' => 3,
                'start_date' => Carbon::create(2024, 11, 15, 14, 0, 0),
                'end_date' => Carbon::create(2024, 11, 20, 12, 0, 0),
                'observation' => 'Reserva para una familia con niños, requiere cama extra.',
                'total_cost' => 500.00,
                'status' => 'Confirmed',
            ],
            [
                'id_apartment' => 2,
                'id_client' => 5,
                'start_date' => Carbon::create(2024, 11, 22, 16, 0, 0),
                'end_date' => Carbon::create(2024, 11, 30, 11, 0, 0),
                'observation' => 'Cliente preferente, con necesidad de acceso temprano.',
                'total_cost' => 750.00,
                'status' => 'Pending',
            ],
            [
                'id_apartment' => 3,
                'id_client' => 7,
                'start_date' => Carbon::create(2024, 11, 1, 10, 0, 0),
                'end_date' => Carbon::create(2024, 11, 5, 11, 0, 0),
                'observation' => 'Apto para una pareja, requiriendo check-out temprano.',
                'total_cost' => 400.00,
                'status' => 'Confirmed',
            ],
            [
                'id_apartment' => 4,
                'id_client' => 2,
                'start_date' => Carbon::create(2024, 11, 10, 15, 0, 0),
                'end_date' => Carbon::create(2024, 11, 15, 12, 0, 0),
                'observation' => 'Estancia corta por negocios, requiere escritorio en la habitación.',
                'total_cost' => 550.00,
                'status' => 'Completed',
            ],
            [
                'id_apartment' => 5,
                'id_client' => 8,
                'start_date' => Carbon::create(2024, 11, 18, 14, 0, 0),
                'end_date' => Carbon::create(2024, 11, 25, 11, 0, 0),
                'observation' => 'Vacaciones con familia, requiere cocina equipada.',
                'total_cost' => 900.00,
                'status' => 'Confirmed',
            ],
            [
                'id_apartment' => 6,
                'id_client' => 1,
                'start_date' => Carbon::create(2024, 11, 20, 13, 0, 0),
                'end_date' => Carbon::create(2024, 11, 25, 12, 0, 0),
                'observation' => 'Cliente VIP, necesita acceso a la piscina.',
                'total_cost' => 800.00,
                'status' => 'Pending',
            ],
            [
                'id_apartment' => 7,
                'id_client' => 4,
                'start_date' => Carbon::create(2024, 11, 5, 14, 0, 0),
                'end_date' => Carbon::create(2024, 11, 10, 11, 0, 0),
                'observation' => 'Viaje de negocios, requiere internet de alta velocidad.',
                'total_cost' => 650.00,
                'status' => 'Confirmed',
            ],
            [
                'id_apartment' => 8,
                'id_client' => 6,
                'start_date' => Carbon::create(2024, 11, 12, 14, 0, 0),
                'end_date' => Carbon::create(2024, 11, 15, 11, 0, 0),
                'observation' => 'Cliente habitual, necesita check-in flexible.',
                'total_cost' => 400.00,
                'status' => 'Completed',
            ],
            [
                'id_apartment' => 9,
                'id_client' => 9,
                'start_date' => Carbon::create(2024, 11, 25, 15, 0, 0),
                'end_date' => Carbon::create(2024, 11, 30, 12, 0, 0),
                'observation' => 'Estancia para grupo grande, requiere varias camas.',
                'total_cost' => 1200.00,
                'status' => 'No_show',
            ],
            [
                'id_apartment' => 10,
                'id_client' => 10,
                'start_date' => Carbon::create(2024, 11, 6, 14, 0, 0),
                'end_date' => Carbon::create(2024, 11, 10, 11, 0, 0),
                'observation' => 'Viaje personal, requiere terraza privada.',
                'total_cost' => 500.00,
                'status' => 'In progress',
            ],
        ];

        foreach ($reservations as $reservationData) {
            Reservation::create($reservationData);
        }
    }
}
