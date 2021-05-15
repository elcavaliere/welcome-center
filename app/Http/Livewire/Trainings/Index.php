<?php

namespace App\Http\Livewire\Trainings;

use App\Models\Training;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $trainings = Training::orderBy('created_at','desc')->get();
        return view('livewire.trainings.index',['trainings' => $trainings]);
    }
}
