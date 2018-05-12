<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TesKonten;
use App\kategori;

class NewsController extends Controller
{
    public function indexEvent($id)
    {
      $judul = kategori::find($id);
      $news = TesKonten::where('kategori_id',$id)->paginate(15);
      $katEvent = kategori :: find(1);
      $katBerita = kategori :: find(2);
      $caption = "Jangan sampai ketinggalan event-event";
      $latestKontens = TesKonten::orderBy('created_at','desc')->paginate(5);
      return view('news',compact('news','katEvent','katBerita','latestKontens','judul','caption'));
    }

    public function index()
    {
      $judul = kategori::find(2);
      $news = TesKonten::paginate(15);
      $katEvent = kategori :: find(1);
      $katBerita = kategori :: find(2);
      $caption = "Kumpulan berita berita dari";
      $latestKontens = TesKonten::orderBy('created_at','desc')->paginate(5);
      return view('news',compact('news','katEvent','katBerita','latestKontens','judul','caption'));
    }
}
