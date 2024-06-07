<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RegionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("regiones")->insert(
            [
            ['nombre'=>'Americas','reglas'=> '-Un equipo no puede participar en 2 torneos, un jugador no puede jugar en mas de 1 equipo, no se aceptaran conductas antideportivas','fechas'=> '16 de Marzo hasta 10 de Julio','premios'=>'8000USD'],
            ['nombre'=>'EMEA','reglas'=> '-Un equipo no puede participar en 2 torneos, un jugador no puede jugar en mas de 1 equipo, no se aceptaran conductas antideportivas','fechas'=> '30 de Marzo hasta 20 de Julio','premios'=>'10000€ '],
            ['nombre'=>'China','reglas'=> '-Un equipo no puede participar en 2 torneos, un jugador no puede jugar en mas de 1 equipo, no se aceptaran conductas antideportivas','fechas'=> '20 de Abril hasta 10 de Agosto','premios'=>'57960CNY'],
             ]           
            
        );
    }
}
