<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\album;
use App\foto;

class GalleriesController extends Controller
{
    public function index()
    {
      $albums = album::paginate(15);
      $latestAlbums = album::orderBy('created_at','desc')->paginate(5);
      $caption = "Kumpulan foto-foto";
      $judul = "Albums";
      return view('albums', compact('albums','latestAlbums','judul','caption'));
    }

    public function indexFoto($id)
    {
      $fotos = album::find($id)->foto;
      $album = album::find($id);
      $latestAlbums = album::orderBy('created_at','desc')->paginate(5);
      $caption = "Kumpulan foto-foto";
      $judul = "Albums";
      return view('IsiAlbum', compact('fotos', 'album','latestAlbums','judul','caption'));
    }

    public function Download($id)
    {
      $foto = foto::find($id);
      $imgToDownload = public_path().'/uploads/'.$foto->foto;
      return response()->download($imgToDownload);
    }
}
