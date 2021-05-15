<?php

namespace App\Http\Livewire\Fundings;

use App\Models\Funding;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $fundings = Funding::with(['sponsor:id,name'])->orderBy('created_at','desc')->get();
        return view('livewire.fundings.index',compact('fundings'));
    }
}
