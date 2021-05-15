<?php

namespace App\Http\Livewire\Fundings;

use App\Models\Funding;
use App\Models\Sponsor;
use Livewire\Component;

class Create extends Component
{

    public $funding;

    public $rules = [
        'funding.type' => 'required',
        'funding.sponsor_id' => 'required',
        'funding.amount' => 'required'
    ];

    public $sponsors;

    public function mount()
    {
        $this->funding = new Funding();
        $this->sponsors = Sponsor::orderBy('name','asc')->get();
    }

    public function save()
    {
        $this->validate();

        $this->funding->save();

        session()->flash('message', 'Sponsor successfully created.');

        $this->reset(['funding']);

        $this->funding = new Funding();
    }

    public function render()
    {
        return view('livewire.fundings.create');
    }
}
