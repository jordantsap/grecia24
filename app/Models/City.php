<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];
    /**
     * Get the post that owns the comment.
     */
    public function countries()
    {
        return $this->belongsTo('App\Models\Country');
    }
    /**
     * Get the post that owns the comment.
     */
    public function states()
    {
        return $this->belongsTo('App\Models\State');
    }
}
