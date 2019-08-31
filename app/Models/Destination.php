<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
  public function getRouteKeyName()
  {
      return 'slug';
  }
  protected $fillable = [
      'title', 'image', 'slug',
  ];

  /**
     * Get the post's image.
     */
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
