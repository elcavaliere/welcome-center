<?php

namespace App\Http\Livewire\Profiles;


use App\Models\Profile;
use App\Models\ProfileCategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Update extends Component
{

    use AuthorizesRequests;
    public $profile;

    public $categories;

    public $rules = [
        'profile.user.first_name' => ['required'],
        'profile.user.last_name' => ['required'],
        'profile.user.email' => ['require','email'],
        'profile.surname' => ['required'],
        'profile.sex' => ['required|max:6'],
        'profile.birth_date' => ['required'],
        'profile.category' => ['required'],
    ];

    public function mount(Profile $profile)
    {
        $this->authorize('update',$profile);
        $profile->load(['user','category:id']);
        $this->profile = $profile;
        $this->categories  = ProfileCategory::select(['id','name'])->orderBy('name','asc')->get();
    }

    public function save()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.profiles.update')->extends('layouts.app');
    }
}
