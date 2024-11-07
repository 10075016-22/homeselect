<?php

namespace Database\Seeders;

use App\Models\Incident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $incidents = [
            [
                'id_reservation' => 1,  // Reserva relacionada (puedes cambiar el ID según la reserva)
                'observation' => 'El apartamento no tenía suficiente calefacción durante la estancia.',
            ],
            [
                'id_reservation' => 2,
                'observation' => 'La limpieza del apartamento no fue adecuada, encontraron polvo en los muebles.',
            ],
            [
                'id_reservation' => 3,
                'observation' => 'Hubo un problema con la disponibilidad del agua caliente, se reportó tarde.',
            ],
            [
                'id_reservation' => 5,
                'observation' => 'El acceso a la piscina estuvo restringido durante todo el fin de semana sin previo aviso.',
            ],
            [
                'id_reservation' => 7,
                'observation' => 'El WiFi del apartamento no funcionaba correctamente durante la mayoría de la estancia.',
            ],
        ];

        foreach ($incidents as $incidentData) {
            Incident::create($incidentData);
        }
    }
}
