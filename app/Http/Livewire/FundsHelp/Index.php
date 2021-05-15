<?php

namespace App\Http\Livewire\FundsHelp;

use App\Models\FundHelp;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $fundsHelp = FundHelp::orderBy('created_at','desc')->get();
        return view('livewire.funds-help.index',compact('fundsHelp'));
    }
}
