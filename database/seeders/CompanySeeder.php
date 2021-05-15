<?php

namespace Database\Seeders;

use App\Models\Company;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i<9; $i++)
        {
            Company::create([
                'name' => $faker->company,
                'email' => $faker->companyEmail,
                'description' => $faker->realText()
            ]);
        }
    }
}
