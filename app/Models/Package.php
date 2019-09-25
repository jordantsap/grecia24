<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
      protected $fillable = ['user_id', 'credits', 'period'];

    // minus 1 By Using decrement()
      public function scopeDecrement($query)
      {
      	return $query->decrement('coupons',1);
      }
    // plus 1 By Using decrement()
      public function scopeIncrement($query)
      {
      	return $this->increment('coupons',1);
      }

}
