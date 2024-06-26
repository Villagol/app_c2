<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("mapas")->insert(
            [
            ['nombre'=> 'Ascent'],
            ['nombre'=> 'Split'],
            ['nombre'=> 'Sunset'],
            ['nombre'=> 'Bind'],
            ['nombre'=> 'Icebox'],
            ['nombre'=> 'Lotus'],
            ['nombre'=> 'Breeze'],
            ]           
            
        );  
    }
}
