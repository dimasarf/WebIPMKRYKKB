<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TesKonten;
use App\kategori;

class DetailContentController extends Controller
{
    public function index($id)
    {
      $konten = TesKonten :: find($id);
      $bnykReply = TesKonten:: find($id)->komentar->count();
      $replies = TesKonten::find($id)->komentar;
      $katEvent = kategori :: find(1);
      $katBerita = kategori :: find(2);
      $caption = "Pantau terus kabar dari";
      $latestKontens = TesKonten::orderBy('created_at','desc')->paginate(5);
      return view('DetailContent', compact('konten', 'latestKontens','katEvent','katBerita', 'caption','replies','bnykReply'));
    }
}
