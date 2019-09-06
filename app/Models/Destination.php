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
   * Get all of the images for the post.
   */
  public function images()
  {
      return $this->morphToMany('App\Models\Image', 'imageable');
  }
}
