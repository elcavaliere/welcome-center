<?php

namespace App\Http\Livewire\FundsHelp;

use App\Models\FundHelp;
use Livewire\Component;

class Create extends Component
{
    public $fundHelp;

    public $rules = [
        'fundHelp.type' => 'required',
        'fundHelp.description' => 'required'
    ];

    public function mount()
    {
        $this->fundHelp = new FundHelp();
    }

    public function save()
    {
        $this->validate();

        $this->fundHelp->save();

        session()->flash('message', 'Sponsor successfully created.');

        $this->reset(['fundHelp']);

        $this->fundHelp = new FundHelp();
    }

    public function render()
    {
        return view('livewire.funds-help.create');
    }
}
