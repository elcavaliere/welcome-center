<?php

namespace App\Http\Livewire\FundsHelp;

use App\Models\HelpFundUser;
use Livewire\Component;

class GrantList extends Component
{
    public function render()
    {

        $helpFundsUser = HelpFundUser::with(['user:id,first_name,last_name','fundHelp:id,type'])
            ->select(['id','user_id','help_fund_id','amount','created_at'])
            ->orderBy('created_at','desc')
            ->get();

        return view('livewire.funds-help.grant-list', compact('helpFundsUser'));
    }
}
