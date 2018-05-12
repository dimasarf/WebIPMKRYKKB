<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
  public function TesKonten()
  {
    return $this->belongsTo(TesKonten::class);
  }

  public function scopeLike($query, $field, $value)
  {
    return $query->where($field, 'LIKE', "%$value%");
  }
}
