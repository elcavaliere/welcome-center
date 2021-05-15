<?php

namespace Database\Seeders;

use App\Models\Training;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i<9; $i++){
            Training::create([
                'title' => $faker->realText('100'),
                'from' => $faker->dateTime,
                'to' => $faker->dateTime,
                'description' => $faker->realText()
            ]);
        }
    }
}
