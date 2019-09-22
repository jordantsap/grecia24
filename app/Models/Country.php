<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['title', 'phonecode', 'slug','updated_at', 'created_at'];

  /**
     * Get the comments for the blog post.
     */
    public function states()
    {
        return $this->hasMany('App\Models\State');
    }
    /**
     * Get the comments for the blog post.
     */
    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }
}
