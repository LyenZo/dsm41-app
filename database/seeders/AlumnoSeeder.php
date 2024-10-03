<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumno= new Alumno();

        $alumno->nombre= 'Oswaldo';
        $alumno->save();

        Alumno::factory(10)->create();
    }
}
