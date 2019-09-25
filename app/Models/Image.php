<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $fillable =['file'];
  /**
     * Get all of the businesses that are assigned this tag.
     */
    public function businesses()
    {
        return $this->morphedByMany('App\Model\Business', 'imageable');
    }

    /**
     * Get all of the properties that are assigned this tag.
     */
    public function adverts()
    {
        return $this->morphedByMany('App\Models\Advert', 'imageable');
    }
    /**
     * Get all of the properties that are assigned this tag.
     */
    public function destinations()
    {
        return $this->morphedByMany('App\Models\Destination', 'imageable');
    }
}
