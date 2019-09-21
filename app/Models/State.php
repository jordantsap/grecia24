<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function countries()
    {
        return $this->belongsTo('App\Models\Country');
    }

    /**
     * Get the comments for the blog post.
     */
    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }
}
