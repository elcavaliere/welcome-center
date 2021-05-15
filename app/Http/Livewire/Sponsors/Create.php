<?php

namespace App\Http\Livewire\Sponsors;

use App\Models\Sponsor;
use Livewire\Component;

class Create extends Component
{

    public $sponsor;

    public $rules = [
        'sponsor.name' => 'required|unique:sponsors,name',
        'sponsor.email' => 'required|unique:sponsors,email',
        'sponsor.description' => 'required|string'
    ];

    public function mount()
    {
        $this->sponsor = new Sponsor();
    }

    public function save()
    {
        $this->validate();

        $this->sponsor->save();

        session()->flash('message', 'Sponsor successfully created.');

        $this->reset(['sponsor']);

        $this->sponsor = new Sponsor();

    }

    public function render()
    {
        return view('livewire.sponsors.create');
    }
}
