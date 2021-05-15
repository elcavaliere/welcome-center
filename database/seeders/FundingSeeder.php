<?php

namespace Database\Seeders;

use App\Models\Funding;
use App\Models\Sponsor;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FundingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (Sponsor::all() as $sponsor){
            Funding::create([
               'type' => $faker->word(),
               'sponsor_id' => $sponsor->id,
               'amount' => $faker->randomFloat(2,1000,3000)
            ]);
        }
    }
}
