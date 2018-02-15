<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
  public function scopeLike($query, $field, $value)
  {
    return $query->where($field, 'LIKE', "%$value%");
  }
}
