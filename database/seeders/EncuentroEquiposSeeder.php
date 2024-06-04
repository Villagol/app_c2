<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EncuentroEquiposSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table("Encuentro_Equipos")->insert([
            ["resultado"=>"2-1","encuentro_id"=>"1","equipo_local_id"=>"1","equipo_visitante_id"=>"2"],
            ["resultado"=>"pendiente","encuentro_id"=>"2","equipo_local_id"=>"1","equipo_visitante_id"=>"3"],
            ["resultado"=>"2-0","encuentro_id"=>"3","equipo_local_id"=>"1","equipo_visitante_id"=>"4"],
            ["resultado"=>"pendiente","encuentro_id"=>"4","equipo_local_id"=>"1","equipo_visitante_id"=>"5"],
            ["resultado"=>"pendiente","encuentro_id"=>"5","equipo_local_id"=>"2","equipo_visitante_id"=>"1"],
            ["resultado"=>"2-1","encuentro_id"=>"6","equipo_local_id"=>"2","equipo_visitante_id"=>"3"],
            ["resultado"=>"pendiente","encuentro_id"=>"7","equipo_local_id"=>"2","equipo_visitante_id"=>"4"],
            ["resultado"=>"2-0","encuentro_id"=>"8","equipo_local_id"=>"2","equipo_visitante_id"=>"5"],
            ["resultado"=>"pendiente","encuentro_id"=>"9","equipo_local_id"=>"3","equipo_visitante_id"=>"1"],
            ["resultado"=>"pendiente","encuentro_id"=>"10","equipo_local_id"=>"3","equipo_visitante_id"=>"2"],
            ["resultado"=>"2-1","encuentro_id"=>"11","equipo_local_id"=>"3","equipo_visitante_id"=>"4"],
            ["resultado"=>"pendiente","encuentro_id"=>"12","equipo_local_id"=>"3","equipo_visitante_id"=>"5"],
            ["resultado"=>"pendiente","encuentro_id"=>"13","equipo_local_id"=>"4","equipo_visitante_id"=>"2"],
            ["resultado"=>"2-0","encuentro_id"=>"14","equipo_local_id"=>"4","equipo_visitante_id"=>"3"],
            ["resultado"=>"pendiente","encuentro_id"=>"15","equipo_local_id"=>"4","equipo_visitante_id"=>"1"],
            ["resultado"=>"2-1","encuentro_id"=>"16","equipo_local_id"=>"4","equipo_visitante_id"=>"5"],
            ["resultado"=>"2-0","encuentro_id"=>"17","equipo_local_id"=>"5","equipo_visitante_id"=>"2"],
            ["resultado"=>"pendiente","encuentro_id"=>"18","equipo_local_id"=>"5","equipo_visitante_id"=>"3"],
            ["resultado"=>"pendiente","encuentro_id"=>"19","equipo_local_id"=>"5","equipo_visitante_id"=>"1"],
            ["resultado"=>"pendiente","encuentro_id"=>"20","equipo_local_id"=>"5","equipo_visitante_id"=>"4"],
            ["resultado"=>"pendiente","encuentro_id"=>"21","equipo_local_id"=>"6","equipo_visitante_id"=>"7"],
            ["resultado"=>"pendiente","encuentro_id"=>"1","equipo_local_id"=>"6","equipo_visitante_id"=>"8"],
            ["resultado"=>"2-1","encuentro_id"=>"2","equipo_local_id"=>"6","equipo_visitante_id"=>"9"],
            ["resultado"=>"pendiente","encuentro_id"=>"3","equipo_local_id"=>"6","equipo_visitante_id"=>"10"],
            ["resultado"=>"pendiente","encuentro_id"=>"4","equipo_local_id"=>"7","equipo_visitante_id"=>"6"],
            ["resultado"=>"pendiente","encuentro_id"=>"5","equipo_local_id"=>"7","equipo_visitante_id"=>"8"],
            ["resultado"=>"pendiente","encuentro_id"=>"6","equipo_local_id"=>"7","equipo_visitante_id"=>"9"],
            ["resultado"=>"2-0","encuentro_id"=>"7","equipo_local_id"=>"7","equipo_visitante_id"=>"10"],
            ["resultado"=>"pendiente","encuentro_id"=>"8","equipo_local_id"=>"8","equipo_visitante_id"=>"1"],
            ["resultado"=>"2-0","encuentro_id"=>"9","equipo_local_id"=>"8","equipo_visitante_id"=>"2"],
            ["resultado"=>"pendiente","encuentro_id"=>"10","equipo_local_id"=>"8","equipo_visitante_id"=>"4"],
            ["resultado"=>"pendiente","encuentro_id"=>"11","equipo_local_id"=>"8","equipo_visitante_id"=>"5"],
            ["resultado"=>"pendiente","encuentro_id"=>"12","equipo_local_id"=>"9","equipo_visitante_id"=>"7"],
            ["resultado"=>"2-1","encuentro_id"=>"13","equipo_local_id"=>"9","equipo_visitante_id"=>"8"],
            ["resultado"=>"pendiente","encuentro_id"=>"14","equipo_local_id"=>"9","equipo_visitante_id"=>"6"],
            ["resultado"=>"2-0","encuentro_id"=>"15","equipo_local_id"=>"9","equipo_visitante_id"=>"10"],
            ["resultado"=>"2-1","encuentro_id"=>"16","equipo_local_id"=>"10","equipo_visitante_id"=>"7"],
            ["resultado"=>"pendiente","encuentro_id"=>"17","equipo_local_id"=>"10","equipo_visitante_id"=>"8"],
            ["resultado"=>"pendiente","encuentro_id"=>"18","equipo_local_id"=>"10","equipo_visitante_id"=>"6"],
            ["resultado"=>"2-0","encuentro_id"=>"19","equipo_local_id"=>"10","equipo_visitante_id"=>"9"],
            ["resultado"=>"pendiente","encuentro_id"=>"20","equipo_local_id"=>"11","equipo_visitante_id"=>"12"],
            ["resultado"=>"pendiente","encuentro_id"=>"21","equipo_local_id"=>"11","equipo_visitante_id"=>"13"],
            ["resultado"=>"pendiente","encuentro_id"=>"1","equipo_local_id"=>"11","equipo_visitante_id"=>"14"],
            ["resultado"=>"2-1","encuentro_id"=>"2","equipo_local_id"=>"11","equipo_visitante_id"=>"15"],
            ["resultado"=>"2-0","encuentro_id"=>"3","equipo_local_id"=>"12","equipo_visitante_id"=>"11"],
            ["resultado"=>"pendiente","encuentro_id"=>"4","equipo_local_id"=>"12","equipo_visitante_id"=>"13"],
            ["resultado"=>"pendiente","encuentro_id"=>"5","equipo_local_id"=>"12","equipo_visitante_id"=>"14"],
            ["resultado"=>"pendiente","encuentro_id"=>"6","equipo_local_id"=>"12","equipo_visitante_id"=>"15"],
            ["resultado"=>"pendiente","encuentro_id"=>"7","equipo_local_id"=>"13","equipo_visitante_id"=>"11"],
            ["resultado"=>"pendiente","encuentro_id"=>"8","equipo_local_id"=>"13","equipo_visitante_id"=>"12"],
            ["resultado"=>"2-1","encuentro_id"=>"9","equipo_local_id"=>"13","equipo_visitante_id"=>"14"],
            ["resultado"=>"pendiente","encuentro_id"=>"10","equipo_local_id"=>"13","equipo_visitante_id"=>"15"],
            ["resultado"=>"pendiente","encuentro_id"=>"11","equipo_local_id"=>"14","equipo_visitante_id"=>"11"],
            ["resultado"=>"pendiente","encuentro_id"=>"12","equipo_local_id"=>"14","equipo_visitante_id"=>"12"],
            ["resultado"=>"pendiente","encuentro_id"=>"13","equipo_local_id"=>"14","equipo_visitante_id"=>"13"],
            ["resultado"=>"2-0","encuentro_id"=>"14","equipo_local_id"=>"14","equipo_visitante_id"=>"15"],
            ["resultado"=>"pendiente","encuentro_id"=>"15","equipo_local_id"=>"15","equipo_visitante_id"=>"11"],
            ["resultado"=>"pendiente","encuentro_id"=>"16","equipo_local_id"=>"15","equipo_visitante_id"=>"12"],
            ["resultado"=>"2-1","encuentro_id"=>"17","equipo_local_id"=>"15","equipo_visitante_id"=>"13"],
            ["resultado"=>"pendiente","encuentro_id"=>"18","equipo_local_id"=>"15","equipo_visitante_id"=>"14"]
            ]
        );
    }
}
