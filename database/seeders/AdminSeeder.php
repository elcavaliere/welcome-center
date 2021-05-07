<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'first_name' => 'elie',
            'last_name' => 'kitadi',
            'email' => 'kitadi.elie.ik.2623@gmail.com',
            'role_id' => Role::where('name','admin')->first()->id,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ];

        User::create($admin);
    }
}
