<?php

namespace App\Http\Livewire\Trainings;

use App\Models\Training;
use Livewire\Component;

class Create extends Component
{
    public $training;

    public $rules = [
      'training.title' => 'required',
      'training.from' => ['required'],
      'training.to' => ['required'],
        'training.description' => 'required'
    ];

    public function mount()
    {
        $this->training = new Training();
    }

    public function save()
    {
        $this->validate();

        $this->training->save();

        session()->flash('message', 'Sponsor successfully created.');

        $this->reset(['training']);

        $this->training = new Training();
    }

    public function render()
    {
        return view('livewire.trainings.create');
    }
}
