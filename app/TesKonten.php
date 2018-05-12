<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesKonten extends Model
{
    public function kategori()
    {
      $this->belongsTo(kategori::class);
    }

    public function komentar()
    {
      return $this->hasMany(komentar::class);
    }
}
