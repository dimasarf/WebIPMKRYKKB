<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public function tag()
    {
      $this->hasMany(TesKonten::class);
    }

    public function kategori()
    {
      return 0;
    }
}
