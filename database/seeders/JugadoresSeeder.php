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
            [['nombre'=>'Nicolas','apellido'=>'Ferrari','nickname'=>'Klaus','agente_1'=>'Sova','agente_2'=>'Viper','agente_3'=>'Gekko','equipo_id'=>'1'],
            ['nombre'=>'Marco','apellido'=>'Machuca','nickname'=>'Melser','agente_1'=>'Omen','agente_2'=>'Viper','agente_3'=>'Harbor','equipo_id'=>'1'],
            ['nombre'=>'Angelo','apellido'=>'Mori','nickname'=>'KeznitDeus','agente_1'=>'Jett','agente_2'=>'Raze','agente_3'=>'Reyna','equipo_id'=>'1'],
            ['nombre'=>'Fabian','apellido'=>'Usnayo','nickname'=>'Shyy','agente_1'=>'Killjoy','agente_2'=>'Cypher','agente_3'=>'Fade','equipo_id'=>'1'],
            ['nombre'=>'Olavo','apellido'=>'Marcelo','nickname'=>'Heat','agente_1'=>'KAY/O','agente_2'=>'Fade','agente_3'=>'Gekko','equipo_id'=>'1'],

            ['nombre'=>'Erick','apellido'=>'Bach','nickname'=>'Xeppaaa','agente_1'=>'Skye','agente_2'=>'Gekko','agente_3'=>'Sage','equipo_id'=>'2'],
            ['nombre'=>'Francis','apellido'=>'Hoang','nickname'=>'OXY','agente_1'=>'Raze','agente_2'=>'Jett','agente_3'=>'Reyna','equipo_id'=>'2'],
            ['nombre'=>'Anthony','apellido'=>'Malaspina','nickname'=>'Vanity','agente_1'=>'Omen','agente_2'=>'Viper','agente_3'=>'Harbor','equipo_id'=>'2'],
            ['nombre'=>'Kaleb','apellido'=>'Jayne','nickname'=>'Moose','agente_1'=>'Killjoy','agente_2'=>'Cypher','agente_3'=>'Fade','equipo_id'=>'2'],
            ['nombre'=>'Dylan','apellido'=>'Cade','nickname'=>'Runi','agente_1'=>'Viper','agente_2'=>'Sova','agente_3'=>'Gekko','equipo_id'=>'2'],

            ['nombre'=>'Jonah','apellido'=>'Pulice','nickname'=>'JonahP','agente_1'=>'Viper','agente_2'=>'Skye','agente_3'=>'Breach','equipo_id'=>'3'],
            ['nombre'=>'Trent','apellido'=>'Cairns','nickname'=>'Trent','agente_1'=>'Sova','agente_2'=>'Fade','agente_3'=>'Gekko','equipo_id'=>'3'],
            ['nombre'=>'Jacob','apellido'=>'Batio','nickname'=>'Valyn','agente_1'=>'Omen','agente_2'=>'Brimstone','agente_3'=>'Harbor','equipo_id'=>'3'],
            ['nombre'=>'Nathan','apellido'=>'Orf','nickname'=>'Leaf','agente_1'=>'Killjoy','agente_2'=>'Viper','agente_3'=>'Cypher','equipo_id'=>'3'],
            ['nombre'=>'Jacob','apellido'=>'Lange','nickname'=>'Icy','agente_1'=>'Raze','agente_2'=>'Jett','agente_3'=>'Gekko','equipo_id'=>'3'],

            ['nombre'=>'Zachary','apellido'=>'Patrone','nickname'=>'Zekken','agente_1'=>'Raze','agente_2'=>'Jett','agente_3'=>'Reyna','equipo_id'=>'4'],
            ['nombre'=>'Gustavo','apellido'=>'Rossi da Silva','nickname'=>'Sacy','agente_1'=>'Skye','agente_2'=>'Gekko','agente_3'=>'Sova','equipo_id'=>'4'],
            ['nombre'=>'Tyson','apellido'=>'Van Ngo','nickname'=>'TenZ','agente_1'=>'Omen','agente_2'=>'KAY/O','agente_3'=>'Jett','equipo_id'=>'4'],
            ['nombre'=>'Mohame','apellido'=>'Ouarid','nickname'=>'Johnqt','agente_1'=>'Cypher','agente_2'=>'Viper','agente_3'=>'Killjoy','equipo_id'=>'4'],
            ['nombre'=>'Jordan','apellido'=>'Montemurro','nickname'=>'Zellsis','agente_1'=>'Viper','agente_2'=>'Killjoy','agente_3'=>'Cypher','equipo_id'=>'4'],

            ['nombre'=>'Austin','apellido'=>'Roberts','nickname'=>'Crashies','agente_1'=>'Skye','agente_2'=>'Gekko','agente_3'=>'Sova','equipo_id'=>'5'],
            ['nombre'=>'Victor','apellido'=>'Wong','nickname'=>'Victor','agente_1'=>'Raze','agente_2'=>'Jett','agente_3'=>'Reyna','equipo_id'=>'5'],
            ['nombre'=>'Ethan','apellido'=>'Arnold','nickname'=>'Ethan','agente_1'=>'Omen','agente_2'=>'Skye','agente_3'=>'Sova','equipo_id'=>'5'],
            ['nombre'=>'Pujan','apellido'=>'Mehta','nickname'=>'FNS','agente_1'=>'Viper','agente_2'=>'Killjoy','agente_3'=>'Breach','equipo_id'=>'5'],
            ['nombre'=>'Sam','apellido'=>'Oh','nickname'=>'S0m','agente_1'=>'Omen','agente_2'=>'Harbor','agente_3'=>'Brimstone','equipo_id'=>'5'],

            ['nombre'=>'Doğukan','apellido'=>'Balaban','nickname'=>'qRaxs','agente_1'=>'KAY/0','agente_2'=>'Raze','agente_3'=>'Gekko','equipo_id'=>'6'],
            ['nombre'=>'Furkan','apellido'=>'Yeğen','nickname'=>'MrFaliN','agente_1'=>'Sova','agente_2'=>'Skye','agente_3'=>'Omen','equipo_id'=>'6'],
            ['nombre'=>'Ata','apellido'=>'Tan','nickname'=>'ATA KAPTAN','agente_1'=>'Omen','agente_2'=>'Viper','agente_3'=>'Brimstone','equipo_id'=>'6'],
            ['nombre'=>'Eray','apellido'=>'Budak','nickname'=>'yetujey','agente_1'=>'Cypher','agente_2'=>'Viper','agente_3'=>'Killjoy','equipo_id'=>'6'],
            ['nombre'=>'Mehmet','apellido'=>'İpek','nickname'=>'cNed','agente_1'=>'Jett','agente_2'=>'Raze','agente_3'=>'Chamber','equipo_id'=>'6'],
            
            
            ['nombre'=>'Ričardas','apellido'=>'Lukaševičius','nickname'=>'Boo','agente_1'=>'Omen','agente_2'=>'Viper','agente_3'=>'Harbor','equipo_id'=>'7'],
            ['nombre'=>'Benjy','apellido'=>'Fish','nickname'=>'benjyfishy','agente_1'=>'Cypher','agente_2'=>'Killjoy','agente_3'=>'Viper','equipo_id'=>'7'],
            ['nombre'=>'Dominykas','apellido'=>'Lukaševičius','nickname'=>'MiniBoo','agente_1'=>'Raze','agente_2'=>'Yoru','agente_3'=>'Neon','equipo_id'=>'7'],
            ['nombre'=>'Enes','apellido'=>'Ecirli','nickname'=>'RieNs','agente_1'=>'Sova','agente_2'=>'Breach','agente_3'=>'Skye','equipo_id'=>'7'],
            ['nombre'=>'Mert','apellido'=>'Alkan','nickname'=>'Wo0t','agente_1'=>'Raze','agente_2'=>'Viper','agente_3'=>'Fade','equipo_id'=>'7'],
            
            ['nombre'=>'Jake','apellido'=>'Howlett','nickname'=>'Boaster','agente_1'=>'Omen','agente_2'=>'Viper','agente_3'=>'Brimstone','equipo_id'=>'8'],
            ['nombre'=>'Nikita','apellido'=>'Sirmitev','nickname'=>'Derke','agente_1'=>'Raze','agente_2'=>'Yoru','agente_3'=>'Jett','equipo_id'=>'8'],
            ['nombre'=>'Emir','apellido'=>'Beder','nickname'=>'Alfajer','agente_1'=>'Killjoy','agente_2'=>'Cypher','agente_3'=>'Viper','equipo_id'=>'8'],
            ['nombre'=>'Leo','apellido'=>'Jannesson','nickname'=>'Leo','agente_1'=>'Sova','agente_2'=>'Fade','agente_3'=>'Breach','equipo_id'=>'8'],
            ['nombre'=>'Timofey','apellido'=>'Khromov','nickname'=>'Chronicle','agente_1'=>'KAY/O','agente_2'=>'Skye','agente_3'=>'Viper','equipo_id'=>'8'],
            
            ['nombre'=>'Kyrylo','apellido'=>'Karasov','nickname'=>'ANGE1','agente_1'=>'Gekko','agente_2'=>'Sova','agente_3'=>'Yoru','equipo_id'=>'9'],
            ['nombre'=>'Dmitry','apellido'=>'Ilyushin','nickname'=>'SUYGETSU','agente_1'=>'Cypher','agente_2'=>'Viper','agente_3'=>'Killjoy','equipo_id'=>'9'],
            ['nombre'=>'Andrey','apellido'=>'Kiprsky','nickname'=>'Shao','agente_1'=>'Brimstone','agente_2'=>'Omen','agente_3'=>'Astra','equipo_id'=>'9'],
            ['nombre'=>'Pontus','apellido'=>'Eek','nickname'=>'Zyppan','agente_1'=>'Raze','agente_2'=>'Sova','agente_3'=>'KAY/O','equipo_id'=>'9'],
            ['nombre'=>'Ardis','apellido'=>'Svarenieks','nickname'=>'ardiis','agente_1'=>'Breach','agente_2'=>'Jett','agente_3'=>'KAY/O','equipo_id'=>'9'],
            
            ['nombre'=>'Ryad','apellido'=>'Ensaad','nickname'=>'Shin','agente_1'=>'Omen','agente_2'=>'Sage','agente_3'=>'Viper','equipo_id'=>'10'],
            ['nombre'=>'Martin','apellido'=>'Peňkov','nickname'=>'Magnum','agente_1'=>'Killjoy','agente_2'=>'Skye','agente_3'=>'KAY/O','equipo_id'=>'10'],
            ['nombre'=>'Martin','apellido'=>'Pátek','nickname'=>'marteen','agente_1'=>'Raze','agente_2'=>'Yoru','agente_3'=>'Reina','equipo_id'=>'10'],
            ['nombre'=>'Marshall','apellido'=>'Massey','nickname'=>'N4RRATE','agente_1'=>'Gekko','agente_2'=>'Jett','agente_3'=>'Sova','equipo_id'=>'10'],
            ['nombre'=>'Tomás','apellido'=>'Machado','nickname'=>'tomaszy','agente_1'=>'Viper','agente_2'=>'Cypher','agente_3'=>'Killjoy','equipo_id'=>'10'],
            
            ['nombre'=>'Guo','apellido'=>'Haodong','nickname'=>'Haodong','agente_1'=>'KAY/O','agente_2'=>'Cypher','agente_3'=>'Gekko','equipo_id'=>'11'],
            ['nombre'=>'Wan','apellido'=>'Shunzhi','nickname'=>'CHICHOO','agente_1'=>'Viper','agente_2'=>'Killjoy','agente_3'=>'Cypher','equipo_id'=>'11'],
            ['nombre'=>'Wang','apellido'=>'Senxu','nickname'=>'nobody','agente_1'=>'Skye','agente_2'=>'Sova','agente_3'=>'Gekko','equipo_id'=>'11'],
            ['nombre'=>'Zheng','apellido'=>'Yongkang','nickname'=>'ZmjjKK','agente_1'=>'Raze','agente_2'=>'Jett','agente_3'=>'Reyna','equipo_id'=>'11'],
            ['nombre'=>'Zhang','apellido'=>'Zhao','nickname'=>'Smoggy','agente_1'=>'Omen','agente_2'=>'Viper','agente_3'=>'Brimstone','equipo_id'=>'11'],
            
            ['nombre'=>'Shao','apellido'=>'Yi-chun','nickname'=>'Nicc','agente_1'=>'Skye','agente_2'=>'KAY/O','agente_3'=>'Sova','equipo_id'=>'12'],
            ['nombre'=>'Chen','apellido'=>'Chen-ching','nickname'=>'TvirusLuke','agente_1'=>'Raze','agente_2'=>'Jett','agente_3'=>'Reyna','equipo_id'=>'12'],
            ['nombre'=>'Ilya','apellido'=>'Ushakov','nickname'=>'vo0kashu','agente_1'=>'Cypher','agente_2'=>'Killjoy','agente_3'=>'Sage','equipo_id'=>'12'],
            ['nombre'=>'Tang','apellido'=>'Zhehao','nickname'=>'TZH','agente_1'=>'Omen','agente_2'=>'Viper','agente_3'=>'Brimstone','equipo_id'=>'12'],
            ['nombre'=>'Zhang','apellido'=>'Haoze','nickname'=>'Shion7','agente_1'=>'Sova','agente_2'=>'Viper','agente_3'=>'Omen','equipo_id'=>'12'],
            
            ['nombre'=>'Ye','apellido'=>'Xiaodong','nickname'=>'o0o0o','agente_1'=>'Brimstone','agente_2'=>'Viper','agente_3'=>'Omen','equipo_id'=>'13'],
            ['nombre'=>'Chen','apellido'=>'Yijie','nickname'=>'OBONE','agente_1'=>'Omen','agente_2'=>'Astra','agente_3'=>'Viper','equipo_id'=>'13'],
            ['nombre'=>'Wang','apellido'=>'Qingchuan','nickname'=>'cb','agente_1'=>'Skye','agente_2'=>'Sova','agente_3'=>'Fade','equipo_id'=>'13'],
            ['nombre'=>'Guang','apellido'=>'Honglin','nickname'=>'GuanG','agente_1'=>'Killjoy','agente_2'=>'Gekko','agente_3'=>'Sage','equipo_id'=>'13'],
            ['nombre'=>'Ali','apellido'=>'Kobraee','nickname'=>'Swerl','agente_1'=>'Raze','agente_2'=>'Jett','agente_3'=>'Reyna','equipo_id'=>'13'],
            
            ['nombre'=>'Zhang','apellido'=>'Yang','nickname'=>'AAAAY','agente_1'=>'Gekko','agente_2'=>'Fade','agente_3'=>'Sova','equipo_id'=>'14'],
            ['nombre'=>'Chang','apellido'=>'Po-lin','nickname'=>'BerLIN','agente_1'=>'Harbor','agente_2'=>'Fade','agente_3'=>'KAY/O','equipo_id'=>'14'],
            ['nombre'=>'Liang','apellido'=>'Youhao','nickname'=>'Lysoar','agente_1'=>'Omen','agente_2'=>'Cypher','agente_3'=>'Brimstone','equipo_id'=>'14'],
            ['nombre'=>'Kale','apellido'=>'Dunne','nickname'=>'autumn','agente_1'=>'Harbor','agente_2'=>'Omen','agente_3'=>'Viper','equipo_id'=>'14'],
            ['nombre'=>'Qu','apellido'=>'Donghao','nickname'=>'Life','agente_1'=>'Raze','agente_2'=>'Yoru','agente_3'=>'Clove','equipo_id'=>'14'],
            
            ['nombre'=>'Jiang','apellido'=>'He','nickname'=>'Bunt','agente_1'=>'Omen','agente_2'=>'Viper','agente_3'=>'Astra','equipo_id'=>'15'],
            ['nombre'=>'Delbert','apellido'=>'Tanoto','nickname'=>'deLb','agente_1'=>'Cypher','agente_2'=>'Yoru','agente_3'=>'Killjoy','equipo_id'=>'15'],
            ['nombre'=>'Wang','apellido'=>'Haoyu','nickname'=>'Monk','agente_1'=>'Breach','agente_2'=>'Harbor','agente_3'=>'Killjoy','equipo_id'=>'15'],
            ['nombre'=>'Xin','apellido'=>'Mingyang','nickname'=>'Spitfires','agente_1'=>'Raze','agente_2'=>'Cypher','agente_3'=>'Jett','equipo_id'=>'15'],
            ['nombre'=>'Li','apellido'=>'Wei','nickname'=>'sword9','agente_1'=>'Sova','agente_2'=>'KAY/O','agente_3'=>'Killjoy','equipo_id'=>'15'],
            ]





        );
    }
}
