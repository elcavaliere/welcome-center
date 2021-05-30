<?php

namespace App\Http\Livewire\Components\Trainees;

use App\Models\User;
use Livewire\Component;

class StackedListItem extends Component
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.components.trainees.stacked-list-item');
    }
}
