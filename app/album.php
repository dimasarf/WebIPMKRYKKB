<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
  public function foto()
  {
      return $this->hasMany(foto::class);
  }
  public function scopeLike($query, $field, $value)
  {
    return $query->where($field, 'LIKE', "%$value%");
  }
}
