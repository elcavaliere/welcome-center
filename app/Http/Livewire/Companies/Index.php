<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $companies = Company::orderBy('name','desc')->get();
        return view('livewire.companies.index',compact('companies'));
    }
}
