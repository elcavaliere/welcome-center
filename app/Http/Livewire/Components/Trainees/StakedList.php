<?php

namespace App\Http\Livewire\Components\Trainees;

use Livewire\Component;

class StakedList extends Component
{
    public $users;

    public function mount($users)
    {
        $this->users = $users;
    }
    public function render()
    {
        return view('livewire.components.trainees.staked-list');
    }
}
