<?php

namespace App\Models;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model //implements Searchable
{
    protected $guarded = [];
    protected $table = 'dbec_adsmanager_ads';

    /**
     * Get all of the images for the post.
     */
    public function images()
    {
        return $this->morphToMany('App\Models\Image', 'imageable');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\AdvertType');
    }
}
