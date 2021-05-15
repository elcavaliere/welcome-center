<?php

namespace App\Http\Livewire\FundsHelp;

use App\Models\FundHelp;
use App\Models\HelpFundUser;
use App\Models\User;
use Livewire\Component;

class Grant extends Component
{

    public $helpFundUser;
    public $users;
    public $fundsHelp;

    public $rules = [
      'helpFundUser.user_id' => 'required',
      'helpFundUser.help_fund_id' => 'required',
        'helpFundUser.amount' => 'required'
    ];

    public function mount(){

        $this->helpFundUser = new HelpFundUser();
        $this->users = User::select(['id','first_name','last_name'])->whereHas('role', function ($q) {
            $q->where('name','trainee');
        })->get();
        $this->fundsHelp = FundHelp::select(['id','type'])->get();
    }

    public function save()
    {
        $this->validate();

        $this->helpFundUser->save();

        session()->flash('message', 'Sponsor successfully created.');

        $this->reset(['helpFundUser']);

        $this->helpFundUser = new HelpFundUser();
    }

    public function render()
    {
        return view('livewire.funds-help.grant');
    }
}
