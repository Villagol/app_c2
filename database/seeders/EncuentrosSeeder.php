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

            ['fecha'=>'12/07/2023', 'hora'=>'19:00', 'mapa_id'=>'7'],
            ['fecha'=>'13/07/2023', 'hora'=>'21:00', 'mapa_id'=>'4'],
            ['fecha'=>'12/07/2023', 'hora'=>'23:00', 'mapa_id'=>'1'],
            ['fecha'=>'19/08/2023', 'hora'=>'12:00', 'mapa_id'=>'2'],
            ['fecha'=>'20/08/2023', 'hora'=>'14:00', 'mapa_id'=>'5'],
            ['fecha'=>'20/08/2023', 'hora'=>'16:00', 'mapa_id'=>'3'],
            ['fecha'=>'28/11/2023', 'hora'=>'17:00', 'mapa_id'=>'6'],
            ['fecha'=>'28/11/2023', 'hora'=>'19:00', 'mapa_id'=>'5'],
            ['fecha'=>'27/11/2023', 'hora'=>'21:00', 'mapa_id'=>'3'],
            ['fecha'=>'01/12/2023', 'hora'=>'13:00', 'mapa_id'=>'1'],
            ['fecha'=>'15/07/2024', 'hora'=>'15:00', 'mapa_id'=>'2'],
            ['fecha'=>'15/07/2024', 'hora'=>'17:00', 'mapa_id'=>'4'],
            ['fecha'=>'16/07/2024', 'hora'=>'10:00', 'mapa_id'=>'6'],
            ['fecha'=>'16/07/2024', 'hora'=>'12:00', 'mapa_id'=>'7'],
            ['fecha'=>'30/07/2024', 'hora'=>'14:00', 'mapa_id'=>'1'],
            ['fecha'=>'27/09/2024', 'hora'=>'16:00', 'mapa_id'=>'4'],
            ['fecha'=>'27/09/2024', 'hora'=>'18:00', 'mapa_id'=>'7'],
            ['fecha'=>'28/09/2024', 'hora'=>'20:00', 'mapa_id'=>'3'],
            ['fecha'=>'24/10/2024', 'hora'=>'15:00', 'mapa_id'=>'6'],
            ['fecha'=>'24/10/2024', 'hora'=>'17:00', 'mapa_id'=>'2'],
            ['fecha'=>'24/10/2024', 'hora'=>'19:00', 'mapa_id'=>'5']]

        );
    }
}
