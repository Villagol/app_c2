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
        DB::table("Encuentros")->insert([

            ['fecha'=>'23/07/23', 'hora'=>'19:00', 'mapa_id'=>'7'],
            ['fecha'=>'23/07/23', 'hora'=>'21:00', 'mapa_id'=>'4'],
            ['fecha'=>'23/07/23', 'hora'=>'23:00', 'mapa_id'=>'1'],
            ['fecha'=>'23/08/19', 'hora'=>'12:00', 'mapa_id'=>'2'],
            ['fecha'=>'23/08/20', 'hora'=>'14:00', 'mapa_id'=>'5'],
            ['fecha'=>'23/08/20', 'hora'=>'16:00', 'mapa_id'=>'3'],
            ['fecha'=>'23/11/28', 'hora'=>'17:00', 'mapa_id'=>'6'],
            ['fecha'=>'23/11/28', 'hora'=>'19:00', 'mapa_id'=>'5'],
            ['fecha'=>'23/11/27', 'hora'=>'21:00', 'mapa_id'=>'3'],
            ['fecha'=>'23/12/01', 'hora'=>'13:00', 'mapa_id'=>'1'],
            ['fecha'=>'24/07/15', 'hora'=>'15:00', 'mapa_id'=>'2'],
            ['fecha'=>'24/07/15', 'hora'=>'17:00', 'mapa_id'=>'4'],
            ['fecha'=>'24/07/16', 'hora'=>'10:00', 'mapa_id'=>'6'],
            ['fecha'=>'24/07/16', 'hora'=>'12:00', 'mapa_id'=>'7'],
            ['fecha'=>'24/07/30', 'hora'=>'14:00', 'mapa_id'=>'1'],
            ['fecha'=>'24/09/27', 'hora'=>'16:00', 'mapa_id'=>'4'],
            ['fecha'=>'24/09/27', 'hora'=>'18:00', 'mapa_id'=>'7'],
            ['fecha'=>'24/09/28', 'hora'=>'20:00', 'mapa_id'=>'3'],
            ['fecha'=>'24/10/24', 'hora'=>'15:00', 'mapa_id'=>'6'],
            ['fecha'=>'24/10/24', 'hora'=>'17:00', 'mapa_id'=>'2'],
            ['fecha'=>'24/10/24', 'hora'=>'19:00', 'mapa_id'=>'5']]

        );
    }
}
