<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i<9;$i++){
            Sponsor::create([
                'name' => $faker->company,
                'email' => $faker->companyEmail,
                'description' => $faker->realText()
            ]);
        }
    }
}
