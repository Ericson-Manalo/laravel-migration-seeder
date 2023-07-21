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
    public function run()
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

        foreach ($trainList as $train){
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriages_num = $train['carriages_num'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->canceled = $train['canceled'];
            $newTrain->save();


        }
        
    }
}
