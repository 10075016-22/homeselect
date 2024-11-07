<?php

namespace Database\Seeders;

use App\Models\TypeEmployee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Gerente de Propiedad',
            'Coordinador de Reservas',
            'Conserje',
            'Encargado de Mantenimiento',
            'Personal de Limpieza',
            'Especialista en Marketing y Redes Sociales',
            'Fotógrafo y Videógrafo',
            'Contador',
            'Chef',
            'Administrador de Plataforma Digital'
        ];

        foreach ($types as $value) {
            TypeEmployee::create(['type_name' => $value]);
        }
    }
}
