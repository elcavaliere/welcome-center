<?php

namespace App\Http\Livewire\Trainees;

use App\Models\Profile as ProfileModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    use AuthorizesRequests;
    public $profile;

    public function mount(ProfileModel $profile)
    {
        $this->authorize('view',$profile);
        $this->profile = $profile;
    }

    public function render()
    {
        return view('livewire.trainees.profile');
    }
}
