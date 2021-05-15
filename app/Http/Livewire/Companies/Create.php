<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;

class Create extends Component
{
    public $company;

    public $rules = [
        'company.name' => 'required',
        'company.email' => ['required','email'],
        'company.description' => 'required'
    ];

    public function mount()
    {
        $this->company = new Company();
    }

    public function save()
    {
        $this->validate();

        $this->company->save();

        session()->flash('message', 'Sponsor successfully created.');

        $this->reset(['company']);

        $this->company = new Company();
    }

    public function render()
    {
        return view('livewire.companies.create');
    }
}
