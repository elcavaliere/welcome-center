<?php

namespace Database\Seeders;

use App\Models\FundHelp;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FundHelpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i<5; $i++)
        {
            FundHelp::create([
                'type' => $faker->text(20),
                'description' => $faker->realText()
            ]);
        }
    }
}
