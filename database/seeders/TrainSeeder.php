<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // $trainList = [
        //     [
        //         'agency' => 'Frecciarossa',
        //         'departure_station' => 'Frecciarossa',
        //         'arrival_station' => 'Frecciarossa',
        //         'departure_time' => '13:30:00',
        //         'arrival_time' => '15:30:00',
        //         'train_code' => '4GS47',
        //         'carriages_num' => 12,
        //         'in_time' => true,
        //         'canceled' => false,
        //     ],
        //     [
        //         'agency' => 'Italo',
        //         'departure_station' => 'Italo',
        //         'arrival_station' => 'Italo',
        //         'departure_time' => '15:30:00',
        //         'arrival_time' => '15:30:00',
        //         'train_code' => '6GXH0',
        //         'carriages_num' => 8,
        //         'in_time' => false,
        //         'canceled' => true,
        //     ]
        // ];


        $agencyList = [
            "EuroCity",
            "Frecciarossa Alta Velocità",
            "Italo",
            "InterCity",
            "Suburbano",
            "Regionale",
            "Regionale Veloce",
            "RegioExpress",
            "Frecciabianca",
            "Frecciargento",
            "Euronight"
        ];

        $stationList = [
            "Ardenno Masino",
            "Castel D`Ario",
            "Certosa Di Pavia",
            "Broni",
            "Chiari",
            "Chignolo Po",
            "Chiuduno",
            "Cisano Caprino Bergamasco",
            "Grumello Del Monte",
            "Lecco Maggianico",
            "Bellano Tartavelle Terme",
            "Milano C.le",
            "Carbonara Scrivia",
            "Tonco Alfiano",
            "Torino Smistamento Nord",
            "Mussotto",
            "Villafranca C.",
            "Ponzana",
            "Magliano Crava Morozzo",
            "S. Germano Vercellese",
            "Vergnasco",
            "Vigliano D`Asti",
            "Madonna Del Pilone",
            "Margarita",
            "Nichelino",
        ];

        $boolTrain = [
            true,
            false,
        ];

        // foreach ($trainList as $train){
        //     $newTrain = new Train();
        //     $newTrain->agency = $train['agency'];
        //     $newTrain->departure_station = $train['departure_station'];
        //     $newTrain->arrival_station = $train['arrival_station'];
        //     $newTrain->departure_time = $train['departure_time'];
        //     $newTrain->arrival_time = $train['arrival_time'];
        //     $newTrain->train_code = $train['train_code'];
        //     $newTrain->carriages_num = $train['carriages_num'];
        //     $newTrain->in_time = $train['in_time'];
        //     $newTrain->canceled = $train['canceled'];
        //     $newTrain->save();
        //}

        for ($i=0; $i < 100 ; $i++) { 
            $newTrain = new Train();
                $newTrain->agency = $faker->randomElement($agencyList);
                $newTrain->departure_station = $faker->randomElement($stationList);
                $newTrain->arrival_station = $faker->randomElement($stationList);
                $newTrain->departure_time = $faker->time('H:i:s');
                $newTrain->arrival_time = $faker->time('H:i:s');
                $newTrain->train_code = $faker->bothify('CAXG-1742!');
                $newTrain->carriages_num = $faker->randomDigit();
                $newTrain->in_time = $faker->randomElement($boolTrain);
                $newTrain->canceled = $faker->randomElement($boolTrain);
                $newTrain->save();
        }
        
    }
}
