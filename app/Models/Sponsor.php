<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the comments for the blog post.
     */
    public function fundings()
    {
        return $this->hasMany(Funding::class);
    }
}
