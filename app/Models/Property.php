<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  protected $guarded = [];

  /**
   * Get all of the images for the post.
   */
  public function images()
  {
      return $this->morphToMany('App\Models\Image', 'imageable');
  }
}
