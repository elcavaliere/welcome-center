<?php

namespace App\Http\Livewire\Trainees;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = User::whereHas('role', function ($q) {
            $q->where('name','trainee');
        })->select(['id','first_name','last_name','email','email_verified_at','role_id'])->get();
        return view('livewire.trainees.index',['users' => $users]);
    }
}
