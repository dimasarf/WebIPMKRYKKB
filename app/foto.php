<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
  public function album()
  {
    return $this->belongsTo(album::class);
  }

  public function scopeLike($query, $field, $value)
  {
    return $query->where($field, 'LIKE', "%$value%");
  }
}
