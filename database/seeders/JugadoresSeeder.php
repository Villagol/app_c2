<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("jugadores")->insert(
            ['nombre'=>'Li','apellido'=>'Wei','nickname'=>'sword9','agente_1'=>'Sova','agente_2'=>'KAY/O','agente_3'=>'Killjoy','equipo_id'=>'15'],






        );
    }
}
