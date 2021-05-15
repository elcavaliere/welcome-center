<?php

namespace App\Http\Livewire\Sponsors;

use App\Models\Sponsor;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $sponsors = Sponsor::orderBy('name','asc')->get();
        return view('livewire.sponsors.index',['sponsors' => $sponsors]);
    }
}
