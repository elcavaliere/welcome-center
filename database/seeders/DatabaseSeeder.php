<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            ProfileCategorySeeder::class,
            UserSeeder::class,
            SponsorSeeder::class,
            TrainingSeeder::class,
            CompanySeeder::class,
            FundHelpSeeder::class,
            FundingSeeder::class,
            FundHelpUserSeeder::class,
            TrainingUserSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
