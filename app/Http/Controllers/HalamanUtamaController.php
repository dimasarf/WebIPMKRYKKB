<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TesKonten;

class HalamanUtamaController extends Controller
{
    public function index()
    {
      $kontens = TesKonten::orderBy('created_at','desc')->paginate(5);
      return view('halamanUtama', compact('kontens'));
    }

    public function indexAlumni()
    {
      return view('halamanAlumni');
    }
}
