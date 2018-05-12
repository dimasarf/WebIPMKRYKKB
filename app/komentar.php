<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    public function TesKonten()
    {
      return $this->belongsTo(TesKonten::class);
    }
}
