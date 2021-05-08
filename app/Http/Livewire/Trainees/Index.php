<?php

namespace App\Http\Livewire\Trainees;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = Role::with([
            'users' => function($q){
                return $q->select(['id','first_name','last_name','email','role_id'])->orderBy('created_at','desc')->get();
            },
            'users.profile:id,sex,surname,user_id'
        ])->select('id')->where('name','trainee')->first();
        return view('livewire.trainees.index',['users' => $users->users]);
    }
}
