<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\ProfileCategory;
use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $profile_categories = [
            'orphan',
             'handicapped',
             'elderly_person',
            'vulnerable_people'
        ];

        for ($i=0; $i<10; $i++){

            $user = User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail(),
                'role_id' => Role::where('name','trainee')->first()->id,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password
                'remember_token' => Str::random(10),
            ]);

            $proCatId = ProfileCategory::select('id')->where('name',$faker->randomElement($profile_categories))->first()->id;

            $profile = Profile::create([
                'surname' => $faker->firstName,
                'sex' => $faker->randomElement(['male','female']),
                'birth_date' => $faker->date(),
                'user_id' => $user->id,
                'profile_category_id' => $proCatId
            ]);

        }
    }
}
