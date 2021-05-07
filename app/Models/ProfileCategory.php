<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'profile_categories';

    /**
     * Get the profiles for the blog post.
     */
    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
