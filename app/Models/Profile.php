<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  /**
   * Get the user that owns the phone.
   */
  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
