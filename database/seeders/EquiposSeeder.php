<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("equipos")->insert([
            ['nombre'=>'KRÜ Visa','entrenador'=>'Jorge Noriega "Atom"','region_id'=>'1'],
            ['nombre'=>'Cloud 9','entrenador'=>'Ian Harding','region_id'=>'1'],
            ['nombre'=>'G2 Esports','entrenador'=>'Josh Lee','region_id'=>'1'],
            ['nombre'=>'Sentinels','entrenador'=>'Adam Kaplan','region_id'=>'1'],
            ['nombre'=>'NRG','entrenador'=>'Chet Singh','region_id'=>'1'],
            ['nombre'=>'Fut Esports','entrenador'=>'Eray Sarikaya','region_id'=>'2'],
            ['nombre'=>'Team Heretics','entrenador'=>'Neil Finlay','region_id'=>'2'],
            ['nombre'=>'Fnatic','entrenador'=>'Chris Tebbit','region_id'=>'2'],
            ['nombre'=>'Natus Vincere','entrenador'=>'Fahlander','region_id'=>'2'],
            ['nombre'=>'Karmine Corp','entrenador'=>'Andrey Sholokhov','region_id'=>'2'],
            ['nombre'=>'EDward Gaming','entrenador'=>'Lo Wen-Hsin','region_id'=>'3'],
            ['nombre'=>'Dragon Ranger Gaming','entrenador'=>'Huang Biaihong','region_id'=>'3'],
            ['nombre'=>'Nova Esports','entrenador'=>'Shao Yubo','region_id'=>'3'],
            ['nombre'=>'FunPlus Phoenix','entrenador'=>'Deng Senqiao','region_id'=>'3'],
            ['nombre'=>'All Gamers','entrenador'=>'Yang Haozun','region_id'=>'3'],
            ]
        );
    }
}
