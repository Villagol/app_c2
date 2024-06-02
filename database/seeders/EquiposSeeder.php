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
        DB::table("equipos")->insert(
           
            
           
            
            ['nombre'=>'All Gamers','entrenador'=>'Yang Haozun','region_id'=>'3'],
        );
    }
}
