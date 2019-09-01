<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
  protected $fillable =['id',];

    public function getRouteKeyName()
    {
        return 'slug';
    }
  /**
   * Get the comments for the blog post.
   */
  public function businesses()
  {
      return $this->hasMany('App\Models\Business');
  }
}
