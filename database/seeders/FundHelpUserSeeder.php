<?php

namespace Database\Seeders;

use App\Models\HelpFundUser;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FundHelpUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (User::select('id')->whereHas('role', function ($q) {
            $q->where('name','admin');
        })->get() as $user){
            HelpFundUser::create([
                'user_id' => $user->id,
                'help_fund_id' => $faker->randomElement([1,2,3,4,5]),
                'amount' => $faker->randomFloat(2,1000,2000)
            ]);
        }
    }
}
