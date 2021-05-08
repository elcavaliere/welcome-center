<?php

namespace App\Http\Livewire\Trainees;

use App\Models\Profile;
use App\Models\ProfileCategory;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $trainee = [
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'surname' => '',
        'sex' => '',
        'birth_date' => '',
        'category' => '',
    ];

    public $rules = [
        'trainee.first_name' => 'required',
        'trainee.last_name' => 'required',
        'trainee.email' => 'required|email|unique:users,email',
        'trainee.surname' => 'required',
        'trainee.sex' => 'required|max:6',
        'trainee.birth_date' => 'required',
        'trainee.category' => 'required',
    ];

    public $categories;

    public function mount()
    {
        $this->categories  = ProfileCategory::orderBy('name','asc')->get();
    }

    public function save()
    {
        $this->validate();

        $user = User::create([
           'first_name' => $this->trainee['first_name'],
           'last_name' => $this->trainee['last_name'],
           'email' => $this->trainee['email'],
           'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role_id' => Role::select('id')->where('name','trainee')->first()->id
        ]);

        $profile = Profile::create([
            'surname' => $this->trainee['surname'],
            'sex' => $this->trainee['sex'],
            'birth_date' => $this->trainee['birth_date'],
            'profile_category_id' => $this->trainee['category'],
            'user_id' => $user->id
        ]);

        $this->trainee = [
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'surname' => '',
            'sex' => '',
            'birth_date' => '',
            'category' => '',
        ];

        event(new Registered($user));

        session()->flash('message', 'Trainee successfully created.');

        return redirect()->back();
    }


    public function render()
    {
        return view('livewire.trainees.create');
    }
}
