<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota;

class Anggota2Controller extends Controller
{

  public function index()
  {
      return view('Registrasi');
  }

  public function store(Request $request)
  {
      $anggota = new anggota();
      $anggota->namaLengkap = $request->namaLengkap;
      $anggota->tanggalLahir = $request->tanggalLahir;
      $anggota->jenisKelamin = $request->jenisKelamin;
      $anggota->alamatJogja = $request->alamatJogja;
      $anggota->alamatBatam = $request->alamatBatam;
      $anggota->universitas = $request->universitas;
      $anggota->jenisKelamin = $request->jenisKelamin;
      $anggota->jurusan = $request->jurusan;
      $anggota->angkatan = $request->angkatan;
      $anggota->idLine = $request->idLine;
      $anggota->keanggotaan = "anggota";
      $anggota->save();
      return redirect('/registrasi-selesai');
   }
}
