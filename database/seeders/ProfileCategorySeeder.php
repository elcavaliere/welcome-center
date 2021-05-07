<?php

namespace Database\Seeders;

use App\Models\ProfileCategory;
use Illuminate\Database\Seeder;

class ProfileCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile_categories = [

            ['name' =>'orphan'],
            ['name' => 'handicapped'],
            ['name' => 'elderly_person'],
            ['name' =>'vulnerable_people']

        ];

        foreach ($profile_categories as $profile_category){
            ProfileCategory::create($profile_category);
        }
    }
}
