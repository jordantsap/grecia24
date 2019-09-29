<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertType extends Model
{
    protected $guarded = [];
    // protected $fillable = ['title', 'slug'];

    public function adverts()
    {
        return $this->hasMany('App\Models\Advert');
    }
}
