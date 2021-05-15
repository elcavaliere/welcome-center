<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpFundUser extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'help_fund_users';

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post that owns the comment.
     */
    public function fundHelp()
    {
        return $this->belongsTo(FundHelp::class,'help_fund_id','id');
    }
}
