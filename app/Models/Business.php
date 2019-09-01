<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
  protected $fillable = [
    'business_type_id'
  ];
  // protected $guarded =[];
  public function getRouteKeyName()
  {
      return 'slug';
  }
  /**
     * Get the post that owns the comment.
     */
    public function businesstype()
    {
        return $this->belongsTo('App\Models\BusinessType');
    }

}
