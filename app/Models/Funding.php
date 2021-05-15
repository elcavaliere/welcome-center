<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the post that owns the comment.
     */
    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }
}
