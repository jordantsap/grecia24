<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function getRouteKeyName()
  {
      return 'slug';
  }
  protected $guarded = [];
}
