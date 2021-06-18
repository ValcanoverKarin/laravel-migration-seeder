<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
            $newTravel = new Travel();
            $newTravel->destinaton = $faker->country();
            $newTravel->duration = $faker->numberBetween(1, 15);
            $newTravel->price = $faker->randomFloat(2, 0, 10000);
            $newTravel->description = $faker->paragraph();
            $newTravel->save();
        }
        /*$travels = [
            [
                'destinaton' => 'Roma',
                'duration' => 2,
                'price' => 300,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore'
            ],
            [
                'destinaton' => 'Londra',
                'duration' => 4,
                'price' => 600,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit'
            ],
        ];

        foreach($travels as $travel) {
            $newTravel = new Travel();
            $newTravel->destinaton = $travel['destinaton'];
            $newTravel->duration = $travel['duration'];
            $newTravel->price = $travel['price'];
            $newTravel->description = $travel['description'];
            $newTravel->save();
        }*/
    }
}
