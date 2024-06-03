<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EncuentrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Encuentros")->insert(

            ['fecha'=>'24/10/24', 'hora'=>'19:00', 'mapa_id'=>'5'],
        );
    }
}
