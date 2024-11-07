<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            ['id_types_employees' => 1, 'name' => 'María García', 'phone' => '+34 600 123 456'],
            ['id_types_employees' => 2, 'name' => 'Juan Pérez', 'phone' => '+34 600 234 567'],
            ['id_types_employees' => 3, 'name' => 'Ana López', 'phone' => '+34 600 345 678'],
            ['id_types_employees' => 4, 'name' => 'Carlos Torres', 'phone' => '+34 600 456 789'],
            ['id_types_employees' => 5, 'name' => 'Elena Ramírez', 'phone' => '+34 600 567 890'],
            ['id_types_employees' => 6, 'name' => 'Sofía Fernández', 'phone' => '+34 600 678 901'],
            ['id_types_employees' => 7, 'name' => 'José Martínez', 'phone' => '+34 600 789 012'],
            ['id_types_employees' => 8, 'name' => 'Laura Sánchez', 'phone' => '+34 600 890 123'],
            ['id_types_employees' => 9, 'name' => 'Pedro Gómez', 'phone' => '+34 600 901 234'],
            ['id_types_employees' => 10, 'name' => 'Lucía Ortiz', 'phone' => '+34 600 012 345'],
        ];

        foreach ($employees as $employeeData) {
            Employee::create($employeeData);
        }
    }
}
