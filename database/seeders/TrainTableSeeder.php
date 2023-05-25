<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 30; $i++) {
            $train = new Train();
            $train->code = $faker->bothify('??-#####');
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->total_couch = $faker->numberBetween(1,20);
            $train->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->on_time = $faker->randomElement([true, false]);
            $train->canceled = $faker->randomElement([true, false]);
            $train->save();
        }    
    }
}
