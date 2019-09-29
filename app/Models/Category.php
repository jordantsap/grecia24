<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Category extends Model implements Searchable
{
    protected $fillable =['published'];
    protected $table = 'dbec_adsmanager_categories';
    public function adverts()
    {
        return $this->belongsToMany(Advert::class);
    }

    // public function getSearchResult(): SearchResult
    // {
    //     $url = route('categories.show', $this->id);
    //
    //     return new SearchResult(
    //         $this,
    //         $this->name,
    //         $url
    //      );
    // }
}
