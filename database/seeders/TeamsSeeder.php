<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cities; 
use App\Models\Divisions; 

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = Cities::all(); // Obtener todas las ciudades
        $divisions = Divisions::all(); // Obtener todas las divisiones

        \App\Models\Teams::factory(32)->create()->each(function ($team) use ($cities, $divisions) {
            $city = $cities->random(); // Seleccionar una ciudad aleatoria
            $division = $divisions->random(); // Seleccionar una división aleatoria
            $conference = $division->conference(); // Obtener la conferencia asociada a la división

            // Asignar el id de la ciudad, la división y la conferencia al equipo
            $team->city_id = $city->id;
            $team->division_id = $division->id;
            $team->conference_id = $conference->id;

            $team->save(); // Guardar el equipo con los nuevos city_id, division_id y conference_id
        });
    }
}


