<?php

namespace Database\Seeders;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'id_incident' => 1,  // Relacionamos el incidente con id 1 (problema con calefacción)
                'id_employee' => 1,  // Gerente de propiedad
                'cost_responsible' => 'Homeselect',  // Responsabilidad de la empresa
                'observation' => 'Verificar el sistema de calefacción y garantizar su funcionamiento.',
                'asignation_date' => Carbon::now(),
                'estimated_cost' => 150.00,  // Costo estimado de la tarea
                'start_date' => Carbon::create(2024, 11, 16, 9, 0, 0),
                'end_date' => Carbon::create(2024, 11, 16, 15, 0, 0),
                'status' => 'Asigned',
            ],
            [
                'id_incident' => 2,  // Relacionado con el incidente sobre limpieza
                'id_employee' => 5,  // Personal de limpieza
                'cost_responsible' => 'Homeselect',
                'observation' => 'Limpiar de manera más profunda los muebles y el área de la sala de estar.',
                'asignation_date' => Carbon::now(),
                'estimated_cost' => 80.00,
                'start_date' => Carbon::create(2024, 11, 12, 10, 0, 0),
                'end_date' => Carbon::create(2024, 11, 12, 14, 0, 0),
                'status' => 'In progress',
            ],
            [
                'id_incident' => 3,  // Relacionado con el agua caliente
                'id_employee' => 4,  // Encargado de mantenimiento
                'cost_responsible' => 'Owner',  // Responsabilidad del propietario
                'observation' => 'Revisar y reparar la caldera para asegurar el suministro de agua caliente.',
                'asignation_date' => Carbon::now(),
                'estimated_cost' => 120.00,
                'start_date' => Carbon::create(2024, 11, 3, 8, 0, 0),
                'end_date' => Carbon::create(2024, 11, 3, 18, 0, 0),
                'status' => 'Done',
            ],
            [
                'id_incident' => 4,  // Relacionado con la piscina restringida
                'id_employee' => 2,  // Coordinador de reservas
                'cost_responsible' => 'Homeselect',
                'observation' => 'Comunicarse con el cliente para disculparse por la falta de acceso a la piscina.',
                'asignation_date' => Carbon::now(),
                'estimated_cost' => 50.00,
                'start_date' => Carbon::create(2024, 11, 18, 9, 0, 0),
                'end_date' => Carbon::create(2024, 11, 18, 12, 0, 0),
                'status' => 'Asigned',
            ],
            [
                'id_incident' => 5,  // Relacionado con el WiFi
                'id_employee' => 3,  // Conserje
                'cost_responsible' => 'Homeselect',
                'observation' => 'Revisar y arreglar el acceso al WiFi en el apartamento.',
                'asignation_date' => Carbon::now(),
                'estimated_cost' => 60.00,
                'start_date' => Carbon::create(2024, 11, 6, 11, 0, 0),
                'end_date' => Carbon::create(2024, 11, 6, 17, 0, 0),
                'status' => 'In progress',
            ],
        ];

        foreach ($tasks as $taskData) {
            Task::create($taskData);
        }
    }
}
