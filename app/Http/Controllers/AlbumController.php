<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\album;

class AlbumController extends Controller
{
    public function StoreNewAlbum(Request $request)
    {
      $album = new album;
      $album->nama = $request->nama;
      $album->save();
      return Redirect("/Dashboard-Galeri");
    }
}
