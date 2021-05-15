<?php

namespace Database\Seeders;

use App\Models\Training;
use App\Models\TrainingUser;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TrainingUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainees = User::whereHas('role', function ($q) {
            $q->where('name','trainee');
        })->select('id')->get();

        $trainingsIds = [];

        $trainings = Training::select('id')->get();

        foreach ($trainings as $training){
            $trainingsIds[] = $training->id;
        }

        foreach ($trainees as $trainee){

            TrainingUser::create([
                'user_id' => $trainee->id,
                'training_id' => Factory::create()->randomElement($trainingsIds)
            ]);
        }
    }
}
