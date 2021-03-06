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
      $this->validate($request,
      [
        'namaLengkap'=>'required',
        'tanggalLahir'=>'required',
        'jenisKelamin'=>'required',
        'alamatJogja'=>'required',
        'alamatBatam'=>'required',
        'universitas'=>'required',
        'jurusan'=>'required',
        'angkatan'=>'required',
        'idLine'=>'required'
      ]);
      $anggota->namaLengkap = $request->namaLengkap;
      $anggota->tanggalLahir = $request->tanggalLahir;
      $anggota->jenisKelamin = $request->jenisKelamin;
      $anggota->alamatJogja = $request->alamatJogja;
      $anggota->alamatBatam = $request->alamatBatam;
      $anggota->universitas = $request->universitas;
      $anggota->jurusan = $request->jurusan;
      $anggota->angkatan = $request->angkatan;
      $anggota->idLine = $request->idLine;
      $anggota->keanggotaan = "anggota";
      $anggota->agama = $request->agama;
      $anggota->noPribadi = $request->noPribadi;
      $anggota->noOrtu = $request->noOrtu;
      $anggota->tempatLahir = $request->tempatLahir;
      $anggota->sumberInformasi = $request->sumberInformasi;
      $anggota->asalSekolah = $request->asalSekolah;
      $anggota->save();
      return redirect('/registrasi-selesai');
   }

   public function indexPengurus()
   {
       return view('RegistrasiPengurus');
   }

   public function delete(Request $request)
   {
       anggota::where('id',$request->id)->delete();
       return response()->json(['done']);
   }

   public function storePengurus(Request $request)
   {
       $anggota = new anggota();
       $this->validate($request,
       [
         'namaLengkap'=>'required',
         'tanggalLahir'=>'required',
         'jenisKelamin'=>'required',
         'alamatJogja'=>'required',
         'alamatBatam'=>'required',
         'universitas'=>'required',
         'jurusan'=>'required',
         'angkatan'=>'required',
         'idLine'=>'required'
       ]);
       $anggota->namaLengkap = $request->namaLengkap;
       $anggota->tanggalLahir = $request->tanggalLahir;
       $anggota->jenisKelamin = $request->jenisKelamin;
       $anggota->alamatJogja = $request->alamatJogja;
       $anggota->alamatBatam = $request->alamatBatam;
       $anggota->universitas = $request->universitas;
       $anggota->jurusan = $request->jurusan;
       $anggota->angkatan = $request->angkatan;
       $anggota->idLine = $request->idLine;
       $anggota->keanggotaan = "pengurus";
       $anggota->agama = $request->agama;
       $anggota->noPribadi = $request->noPribadi;
       $anggota->noOrtu = $request->noOrtu;
       $anggota->tempatLahir = $request->tempatLahir;
       $anggota->sumberInformasi = $request->sumberInformasi;
       $anggota->asalSekolah = $request->asalSekolah;
       $anggota->save();
       return redirect('/registrasi-selesai');
    }

    public function editAnggota(Request $request)
    {
      $anggota = anggota::find($request->id);
      $anggota->namaLengkap = $request->namaLengkap;
      $anggota->tanggalLahir = $request->tanggalLahir;
      $anggota->jenisKelamin = $request->jenisKelamin;
      $anggota->alamatJogja = $request->alamatJogja;
      $anggota->alamatBatam = $request->alamatBatam;
      $anggota->universitas = $request->universitas;
      $anggota->jurusan = $request->jurusan;
      $anggota->angkatan = $request->angkatan;
      $anggota->idLine = $request->idLine;
      //$anggota->save();
      return response()->json($anggota);
    }
}
